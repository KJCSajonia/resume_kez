<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'id_ed_fk' => 1,
            'elective' => 'Game Development',
            'course' => 'Human-Computer Interaction, Software Engineering, Data Structures & Algorithms,
            Database Systems, Machine Level Programming'
         );
        $this->db->table('course')->insert($data); 
    }
}
