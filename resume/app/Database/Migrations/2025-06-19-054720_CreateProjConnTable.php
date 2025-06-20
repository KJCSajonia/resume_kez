<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjConnTable extends Migration
{
  public function up()
    {
        $this->forge->addField([
            'id_proj_conn'=>[
                'type' => 'INT',
                 'unsigned'=>true,
                'auto_increment' => true,
                 
            ],
            'id_stack_fk'=>[
                'type' => 'INT',
                 'unsigned'=>true,
                 
            ],
            'id_ap_fk'=>[
                'type' => 'INT',
                 'unsigned'=>true,
             
            ],

            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp'

            ]);

            $this->forge->addKey('id_proj_conn', true);
            $this->forge->addForeignKey('id_ap_fk', 'projects', 'id_ap');
            $this->forge->addForeignKey('id_stack_fk', 'tech_stacks', 'id_stack');
            $this->forge->createTable('proj_conn');

    }

    public function down()
    {
        $this->forge->dropTable('proj_conn');
    }
}
