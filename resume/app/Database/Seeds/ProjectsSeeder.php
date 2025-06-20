<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'id_fk' => 0,
            'project' => 'NAKAKA-ARNIS',
            'role' => 'Game Developer',
            'date' => 'May 2025',
            'description' => 'An arnis simulator that uses rigid bodies and physics to defeat NPCs of different difficulty level.',
        );
        $data1 = array(
            'id_fk' => 0,
            'project' => 'UPV-OATS',
            'role' => 'Front-End Developer, UI/UX Designer',
            'date' => 'September - December 2024',
            'description' => 'An online appointment tracking system (OATS) for UPV students and faculty.',
        );
        $data2 = array(
            'id_fk' => 0,
            'project' => 'Tag-Alaga',
            'role' => 'UI/UX Designer',
            'date' => 'September - December 2024',
            'description' => 'A prototype of a healthcare mobile application that focuses on helping and assisting those who are taking care of other people.',
        );
        $data3 = array(
            'id_fk' => 0,
            'project' => 'Driverify',
            'role' => 'Full-Stack Developer',
            'date' => 'April - May 2024',
            'description' => 'An LTO-based system that records and tracks down the liabilities of vehicle owners and drivers.',
        );
        $data4 = array(
            'id_fk' => 0,
            'project' => 'Benkyou',
            'role' => 'Front-End Developer, UI/UX Designer',
            'date' => 'April - May 2024',
            'description' => ' A web application that aids students to study efficiently.',
        );

        $this->db->table('projects')->insert($data); 
        $this->db->table('projects')->insert($data1);
        $this->db->table('projects')->insert($data2);
        $this->db->table('projects')->insert($data3);
        $this->db->table('projects')->insert($data4);

    }
}
