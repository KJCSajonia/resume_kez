<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run()
    {
         $data = array(
            'education' => 'Bachelor of Science Major in Computer Science',
            'school' => 'University of the Philippines Visayas',
            'date' => '2022 - Present'
         );
        $data1 = array(
            'education' => 'Senior High School',
            'school' => 'Pavia National High School',
            'date' => '2020 - 2022',
            'description' => 'Senior High School Graduate | With High Honors'
        );
        $this->db->table('education')->insert($data); 
        $this->db->table('education')->insert($data1); 
    }
}
