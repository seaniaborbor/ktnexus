<?php
namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'team';
    protected $primaryKey = 'teamId';
    protected $allowedFields = [
        'name', 'position', 'bio', 'image', 
        'linkedin_url', 'twitter_url', 'github_url',
        'email', 'phone', 'team_password', 'join_date', 'is_active'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $dateFormat = 'datetime';
    
    // Before insert and update, hash the password
    protected $beforeInsert = ['hashPassword'];
    
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['team_password'])) {
            $data['data']['team_password'] = password_hash($data['data']['team_password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}