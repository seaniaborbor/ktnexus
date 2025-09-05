<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Tarnue P. Borbor',
                'position' => 'Senior Developer',
                'bio' => 'Experienced software developer with 8+ years in web technologies.',
                'image' => 'tarnue-borbor.jpg',
                'linkedin_url' => 'https://linkedin.com/in/tarnue-borbor',
                'twitter_url' => 'https://twitter.com/tarnueborbor',
                'github_url' => 'https://github.com/tarnueborbor',
                'email' => 'tarnue.borbor@ktnexus.com',
                'phone' => '+231770123456',
                'team_password' => password_hash('securepassword123', PASSWORD_DEFAULT),
                'join_date' => '2020-05-15',
                'is_active' => 1
            ],
            [
                'name' => 'Kamah Duwana',
                'position' => 'CEO',
                'bio' => 'Founder and CEO of KT-NEXUS TECHNOLOGIES with 12+ years in IT leadership.',
                'image' => 'kamah-duwana.jpg',
                'linkedin_url' => 'https://linkedin.com/in/kamah-duwana',
                'twitter_url' => 'https://twitter.com/kamahduwana',
                'github_url' => 'https://github.com/kamahduwana',
                'email' => 'kamah.duwana@ktnexus.com',
                'phone' => '+231770654321',
                'team_password' => password_hash('ceopassword456', PASSWORD_DEFAULT),
                'join_date' => '2018-01-10',
                'is_active' => 1
            ]
        ];

        // Using Query Builder
        $this->db->table('team')->insertBatch($data);
    }
}