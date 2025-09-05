<?php
namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'projectId';
    protected $allowedFields = [
        'title', 'slug', 'category', 'client_name', 'client_url',
        'project_date', 'description', 'featured_image', 'status'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $dateFormat = 'datetime';
    
    protected $beforeInsert = ['generateSlug'];
    protected $beforeUpdate = ['generateSlug'];
    
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['title'])) {
            $data['data']['slug'] = url_title($data['data']['title'], '-', true);
        }
        return $data;
    }
}