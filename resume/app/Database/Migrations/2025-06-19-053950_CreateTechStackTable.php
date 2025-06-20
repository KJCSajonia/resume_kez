<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTechStackTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_stack'=>[
                'type' => 'INT',
                 'unsigned'=>true,
                 'auto_increment' =>true,
            ],
            'used_stack' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp'

            ]);

            $this->forge->addKey('id_stack', true);
            $this->forge->createTable('tech_stacks');
    }

    public function down()
    {
        $this->forge->dropTable('tech_stacks');
    }
}
