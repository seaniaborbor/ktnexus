<?php
namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\TeamModel;
use App\Models\MessageModel;

class DashboardController extends BaseController
{
    public function __construct()
    {
        helper('url', 'text', 'form');
    }

    public function index()
    {
        // Initialize models
        $projectModel = new ProjectModel();
        $teamModel = new TeamModel();
        $messageModel = new MessageModel();

        // Get counts for stats cards
        $data['incompletedProjects'] = $projectModel->where('status !=', 'published')->countAllResults();
        $data['teamMembers'] = $teamModel->where('is_active', 1)->countAllResults();
        $data['messageCount'] = $messageModel->countAllResults();
        $data['completedProjects'] = $projectModel->where('status', 'published')->countAllResults();

        // Get recent activity
        $data['recentProjects'] = $projectModel
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->findAll();

        $data['recentMessages'] = $messageModel
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->findAll();

        $data['passLink'] = "dashboard";
       
        return view('dashboard/index', $data);
    }
}