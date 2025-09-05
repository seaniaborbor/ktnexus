<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Custom404Controller extends Controller
{
    public function index()
    {
        return view('errors/html/error_404'); // Load your custom 404 view
    }
}
