<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectConnSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // NAKAKA-ARNIS: Unity (2), C# (1)
            ['id_ap_fk' => 11, 'id_stack_fk' => 2],
            ['id_ap_fk' => 11, 'id_stack_fk' => 1],

            // UPV-OATS: Figma (3), React.js (4), TailWind CSS (5), TypeScript (6)
            ['id_ap_fk' => 12, 'id_stack_fk' => 3],
            ['id_ap_fk' => 12, 'id_stack_fk' => 4],
            ['id_ap_fk' => 12, 'id_stack_fk' => 5],
            ['id_ap_fk' => 12, 'id_stack_fk' => 6],

            // Tag-Alaga: Figma (3)
            ['id_ap_fk' => 13, 'id_stack_fk' => 3],

            // Driverify: HTML (10), PHP (7), MySQL (8), CSS (9)
            ['id_ap_fk' => 14, 'id_stack_fk' => 10],
            ['id_ap_fk' => 14, 'id_stack_fk' => 7],
            ['id_ap_fk' => 14, 'id_stack_fk' => 8],
            ['id_ap_fk' => 14, 'id_stack_fk' => 9],

            // Benkyou: HTML (10), JavaScript (6), CSS (9)
            ['id_ap_fk' => 15, 'id_stack_fk' => 10],
            ['id_ap_fk' => 15, 'id_stack_fk' => 6],
            ['id_ap_fk' => 15, 'id_stack_fk' => 9],
        ];

        $this->db->table('proj_conn')->insertBatch($data);
    }
}
