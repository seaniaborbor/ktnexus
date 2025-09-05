<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\ProjectModel;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['form', 'text', 'url']);
        $this->projectModel = new ProjectModel();
        $this->teamModel = new TeamModel();
    }

    public function index(): string
    {
        $data = [
            'meta_title' => 'KT-NEXUS Technologies - Innovative IT Solutions',
            'meta_description' => 'Leading IT solutions provider specializing in custom software development, web applications, and database management systems.',
            'meta_keywords' => 'IT solutions, software development, web applications, database management',
            
            'projects' => $this->projectModel
                ->where('status', 'published')
                ->orderBy('project_date', 'DESC')
                ->limit(3)
                ->findAll(),
                
            'team' => $this->teamModel
                ->where('is_active', 1)
                ->orderBy('join_date', 'DESC')
                ->findAll()
        ];


        return view('public/index', $data);
    }

    public function about(): string
    {
        $data = [
            'meta_title' => 'About KT-NEXUS Technologies - Our Story',
            'meta_description' => 'Since 2018, KT-NEXUS Technologies has been helping businesses transform through innovative technology solutions.',
            'meta_keywords' => 'about us, company history, IT solutions provider',
            
            'team' => $this->teamModel
                ->where('is_active', 1)
                ->orderBy('join_date', 'ASC')
                ->findAll()
        ];
        
        return view('public/about_us', $data);
    }

    public function portfolio(): string
{
    // Get the current page from the URL query string
    $page = $this->request->getVar('page') ?? 1;
    
    // Configure pagination
    $perPage = 6; // Number of projects per page
    $pager = service('pager');
    
    // Get paginated projects
    $projects = $this->projectModel
        ->where('status', 'published')
        ->orderBy('project_date', 'DESC')
        ->paginate($perPage);
        
    // Get unique categories
    $categories = $this->projectModel
        ->distinct()
        ->select('category')
        ->where('status', 'published')
        ->findAll();

    $data = [
        'meta_title' => 'Our Portfolio - KT-NEXUS Technologies',
        'meta_description' => 'Explore our portfolio of completed projects showcasing our expertise in software development and IT solutions.',
        'meta_keywords' => 'portfolio, projects, case studies, IT solutions',
        
        'projects' => $projects,
        'categories' => $categories,
        'pager' => $pager
    ];
    
    return view('public/portfolio', $data);
}

    public function portfolio_detail($slug = null): string
    {
        if (empty($slug)) {
            return redirect()->to('/portfolio');
        }

        $project = $this->projectModel->where('slug', $slug)->first();
        
        if (empty($project)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Get related projects (same category)
        $relatedProjects = $this->projectModel
            ->where('category', $project['category'])
            ->where('projectId !=', $project['projectId'])
            ->limit(3)
            ->findAll();

        $data = [
            'meta_title' => $project['title'] . ' - KT-NEXUS Technologies Project',
            'meta_description' => $project['description'] ? character_limiter(strip_tags($project['description']), 150) : 'Project details from KT-NEXUS Technologies',
            'meta_keywords' => strtolower($project['title']) . ', ' . $project['category'] . ', project, case study',
            
            'project' => $project,
            'related_projects' => $relatedProjects
        ];
        
        return view('public/portfolio_detail', $data);
    }
}