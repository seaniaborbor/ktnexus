<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\API\ResponseTrait;

class PortfolioController extends BaseController
{
    use ResponseTrait;

    protected $projectModel;
    protected $pager;

    public function __construct()
    {
        helper(['form', 'url', 'text']);
        $this->projectModel = new ProjectModel();
        $this->pager = \Config\Services::pager();

        // Ensure user is logged in for admin actions
        if (!session()->has('isLoggedIn') || !session()->has('userData')) {
            return redirect()->to('/auth')->with('error', 'You must be logged in');
        }
    }

    // Public portfolio page (no auth required)
    public function index()
    {
        $data = [
            'title' => 'Our Portfolio | KT-NEXUS TECHNOLOGIES',
            'projects' => $this->projectModel->where('status', 'published')
                             ->where('deleted_at', null)
                             ->orderBy('project_date', 'DESC')
                             ->findAll()
        ];

        return view('public/portfolio', $data);
    }

    // Admin portfolio management
    public function manage()
    {
        $data = [
            'title' => 'Manage Portfolio',
            'userData' => session()->get('userData'),
            'passLink' => 'portfolio',
            'projects' => $this->projectModel->where('deleted_at', null)
                             ->orderBy('project_date', 'DESC')
                             ->paginate(10),
            'pager' => $this->projectModel->pager
        ];

        return view('dashboard/portfolio', $data);
    }

    // Add new project
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'title' => 'required|min_length[5]|max_length[255]',
                'category' => 'required|in_list[web,software,database,mobile]',
                'description' => 'required|min_length[20]',
                'featured_image' => [
                    'rules' => 'uploaded[featured_image]|max_size[featured_image,5024]|is_image[featured_image]',
                    'errors' => [
                        'uploaded' => 'Please select a featured image',
                        'max_size' => 'Image size should be less than 5MB',
                        'is_image' => 'Only image files are allowed'
                    ]
                ],
                'client_name' => 'permit_empty|max_length[100]',
                'client_url' => 'permit_empty|valid_url',
                'project_date' => 'permit_empty|valid_date'
            ];

            if ($this->validate($validationRules)) {
                // Handle file upload
                $image = $this->request->getFile('featured_image');
                $newName = $image->getRandomName();
                $image->move('uploads/portfolio', $newName);

                // Generate slug
                $slug = url_title($this->request->getPost('title'), '-', true);

                $projectData = [
                    'title' => $this->request->getPost('title'),
                    'slug' => $slug,
                    'category' => $this->request->getPost('category'),
                    'description' => $this->request->getPost('description'),
                    'featured_image' => $newName,
                    'client_name' => $this->request->getPost('client_name'),
                    'client_url' => $this->request->getPost('client_url'),
                    'project_date' => $this->request->getPost('project_date'),
                    'status' => 'published'
                ];

                if ($this->projectModel->save($projectData)) {
                    return redirect()->to('/dashboard/projects')->with('success', 'Project added successfully');
                } else {
                    return redirect()->back()->with('error', 'Failed to save project');
                }
            } else {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
        }

        $data = [
            'title' => 'Add New Project',
            'userData' => session()->get('userData'),
            'passLink' => 'portfolio',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/portfolio_create', $data);
    }

    // Edit project
    public function edit($projectId)
    {
        $project = $this->projectModel->find($projectId);
        if (!$project) {
            return redirect()->to('/admin/portfolio')->with('error', 'Project not found');
        }

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'title' => 'required|min_length[5]|max_length[255]',
                'category' => 'required|in_list[web,software,database,mobile]',
                'description' => 'required|min_length[20]',
                'featured_image' => [
                    'rules' => 'max_size[featured_image,5024]|is_image[featured_image]',
                    'errors' => [
                        'max_size' => 'Image size should be less than 5MB',
                        'is_image' => 'Only image files are allowed'
                    ]
                ],
                'client_name' => 'permit_empty|max_length[100]',
                'client_url' => 'permit_empty|valid_url',
                'project_date' => 'permit_empty|valid_date',
                'status' => 'required|in_list[draft,published,archived]'
            ];

            if ($this->validate($validationRules)) {
                $updateData = [
                    'title' => $this->request->getPost('title'),
                    'category' => $this->request->getPost('category'),
                    'description' => $this->request->getPost('description'),
                    'client_name' => $this->request->getPost('client_name'),
                    'client_url' => $this->request->getPost('client_url'),
                    'project_date' => $this->request->getPost('project_date'),
                    'status' => $this->request->getPost('status')
                ];

                // Handle file upload if new image provided
                $image = $this->request->getFile('featured_image');
                if ($image->isValid() && !$image->hasMoved()) {
                    // Delete old image
                    if ($project['featured_image'] && file_exists('uploads/portfolio/' . $project['featured_image'])) {
                        unlink('uploads/portfolio/' . $project['featured_image']);
                    }

                    $newName = $image->getRandomName();
                    $image->move('uploads/portfolio', $newName);
                    $updateData['featured_image'] = $newName;
                }

                if ($this->projectModel->update($projectId, $updateData)) {
                    return redirect()->to('/dashboard/portfolio')->with('success', 'Project updated successfully');
                } else {
                    return redirect()->back()->with('error', 'Failed to update project');
                }
            } else {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
        }

        $data = [
            'title' => 'Edit Project',
            'userData' => session()->get('userData'),
            'passLink' => 'portfolio',
            'project' => $project,
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/portfolio_edit', $data);
    }

    // View single project
    public function view($slug)
    {
        $project = $this->projectModel->where('slug', $slug)
                        ->where('status', 'published')
                        ->where('deleted_at', null)
                        ->first();

        if (!$project) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $project['title'] . ' | KT-NEXUS TECHNOLOGIES',
            'project' => $project,
            'relatedProjects' => $this->projectModel->where('category', $project['category'])
                                    ->where('projectId !=', $project['projectId'])
                                    ->where('status', 'published')
                                    ->where('deleted_at', null)
                                    ->orderBy('project_date', 'DESC')
                                    ->findAll(3)
        ];

        return view('public/portfolio_detail', $data);
    }

    // Delete project (soft delete)
public function delete($projectId)
    {
        if (!is_numeric($projectId)) {
                       return redirect()->back()->with("error", "Invalid project id");
        }

        $project = $this->projectModel->find($projectId);
        if (!$project) {
            return redirect()->back()->with("error", "Project not found");
        }

        if ($this->projectModel->delete($projectId)) {
            return redirect()->back()->with("success", "Project deleted successfully");
        }

        return redirect()->back()->with("error", "Invalid response");
    }


// Change project status
    public function changeStatus($status, $projectId)
    {
        $allowedStatuses = ['draft', 'published', 'archived'];
        if (!in_array($status, $allowedStatuses)) {
            return redirect()->back()->with("error", "Invalid status for project");
        }

        $project = $this->projectModel->find($projectId);
        if (!$project) {
                       return redirect()->back()->with("error", "Project not found");
        }
        // echo $status."<br><br>";
        $project['status'] = $status;
        // print_r($project); exit();

        if ($this->projectModel->update($projectId, $project)) {
            return redirect()->back()->with("success", "Status of project successfully changed");
        }

        return redirect()->back()->with("error", "Internal server error occured");;
    }
}