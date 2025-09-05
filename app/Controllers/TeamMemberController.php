<?php 

namespace App\Controllers;

use App\Models\TeamModel;
use CodeIgniter\API\ResponseTrait;

class TeamMemberController extends BaseController
{
    use ResponseTrait;
    
    protected $teamModel;
    protected $pager;

    public function __construct()
    {
        helper(['form', 'url', 'text']);
        $this->teamModel = new TeamModel();
        $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $data['passLink'] = "team";
        $data['userData'] = session()->get('userData');

        $perPage = 10;
        $page = $this->request->getVar('page') ?? 1;

        $data['all_team'] = $this->teamModel->where('deleted_at', null)->paginate($perPage);
        $data['pager'] = $this->teamModel->pager;

        if ($this->request->getMethod() === "post") {
            $validationRules = [
                'name' => 'required|is_unique[team.name]|min_length[6]|max_length[100]',
                'email' => 'required|valid_email|is_unique[team.email]|min_length[10]',
                'image' => 'uploaded[image]|max_size[image,6024]|is_image[image]|mime_in[image,image/jpeg,image/jpg,image/png]',
                'position' => 'required|min_length[3]|max_length[100]',
                'linkedin_url' => 'permit_empty|valid_url',
                'twitter_url' => 'permit_empty|valid_url',
                'github_url' => 'permit_empty|valid_url'
            ];

            if (!$this->validate($validationRules)) {
                $data['validation'] = $this->validator;
                return view('dashboard/team', $data);
            }

            $imageFile = $this->request->getFile('image');
            $newImgName = $imageFile->getRandomName();
            
            if (!$imageFile->isValid() || !$imageFile->move('public_assets/img/team/', $newImgName)) {
                return redirect()->back()->with('error', 'Error uploading profile image.');
            }

            $formData = [
                'name' => esc($this->request->getPost('name')),
                'email' => esc($this->request->getPost('email')),
                'position' => esc($this->request->getPost('position')),
                'bio' => esc($this->request->getPost('bio')),
                'image' => $newImgName,
                'linkedin_url' => esc($this->request->getPost('linkedin_url')),
                'twitter_url' => esc($this->request->getPost('twitter_url')),
                'github_url' => esc($this->request->getPost('github_url')),
                'phone' => esc($this->request->getPost('phone')),
                'team_password' => password_hash('defaultPassword123', PASSWORD_DEFAULT),
                'join_date' => date('Y-m-d'),
                'is_active' => 1
            ];

            if ($this->teamModel->save($formData)) {
                return redirect()->to('/dashboard/team')->with('success', "Team member added. Email: {$formData['email']} | Default Password: defaultPassword123");
            }
        }

        return view('dashboard/team', $data);
    }

    public function edit($teamId = null)
    {
        if (empty($teamId) || !is_numeric($teamId)) {
            return redirect()->to('/dashboard/team')->with('error', 'Invalid Team ID');
        }

        $data['passLink'] = "team";
        $data['userData'] = session()->get('userData');

        $team = $this->teamModel->find($teamId);
        if (!$team) {
            return redirect()->to('/dashboard/team')->with('error', 'Team member not found');
        }

        // Access Control
        if ($data['userData']['teamId'] != $teamId) {
            return redirect()->to('/dashboard/team')->with('error', 'Access denied.');
        }

        $data['team_data'] = $team;

        $validationRules = [
            'name' => 'required|min_length[6]|max_length[100]',
            'position' => 'required|min_length[3]|max_length[100]',
            'team_password' => 'permit_empty|min_length[6]',
            'linkedin_url' => 'permit_empty|valid_url',
            'twitter_url' => 'permit_empty|valid_url',
            'github_url' => 'permit_empty|valid_url'
        ];

        if ($this->request->getMethod() === "post") {
            $hasNewImage = $this->request->getFile('image')->isValid();

            if ($hasNewImage) {
                $validationRules['image'] = 'uploaded[image]|max_size[image,6024]|is_image[image]|mime_in[image,image/jpeg,image/jpg,image/png]';
            }

            if (!$this->validate($validationRules)) {
                $data['validation'] = $this->validator;
                return view('dashboard/edit_team', $data);
            }

            if ($hasNewImage) {
                $imageFile = $this->request->getFile('image');
                $newImgName = $imageFile->getRandomName();
                
                // Delete old image if exists
                if (!empty($team['image']) && file_exists('public_assets/img/team/'.$team['image'])) {
                    unlink('public_assets/img/team/'.$team['image']);
                }
                
                if (!$imageFile->move('public_assets/img/team/', $newImgName)) {
                    return redirect()->back()->with('error', 'Error uploading image.');
                }
                $team['image'] = $newImgName;
            }

            // Update team data
            $team['name'] = esc($this->request->getPost('name'));
            $team['position'] = esc($this->request->getPost('position'));
            $team['bio'] = esc($this->request->getPost('bio'));
            $team['linkedin_url'] = esc($this->request->getPost('linkedin_url'));
            $team['twitter_url'] = esc($this->request->getPost('twitter_url'));
            $team['github_url'] = esc($this->request->getPost('github_url'));
            $team['phone'] = esc($this->request->getPost('phone'));
            
            $newPassword = trim($this->request->getPost('team_password'));
            if ($newPassword !== '') {
                $team['team_password'] = password_hash($newPassword, PASSWORD_DEFAULT);
            } else {
                unset($team['team_password']); // Ensure it's not in the array
            }


            if ($this->teamModel->update($teamId, $team)) {
                return redirect()->to('/dashboard/team')->with('success', 'Team member updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to update team member.');
            }
        }

        return view('dashboard/edit_team', $data);
    }

    public function delete($teamId)
    {
        if (!is_numeric($teamId)) {
            return redirect()->back()->with('error', 'Invalid team id');
        }

        $team = $this->teamModel->find($teamId);
        if (!$team) {
            return redirect()->back()->with('error', 'Team not found');
        }

        // Soft delete the record
        if ($this->teamModel->delete($teamId)) {
            return redirect()->back()->with('success', 'Team deleted successfully');
        }

        return redirect()->back()->with('error', 'Invalid request or server error');

    }
}