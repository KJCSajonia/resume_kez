<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResumeKTable extends Migration
{
       public function up()
    {
        // $this->forge->addField([
        //     'id'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //     ],
        //     'name'=> [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //     ],
        //     'picture' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'description' => [
        //         'type' => 'TEXT',
        //         'null' => 'true',
        //     ],
        //     'created_at timestamp default current_timestamp',
        //     'updated_at timestamp default current_timestamp on update current_timestamp'

        //     ]);

        //     $this->forge->addKey('id', true);
        //     $this->forge->createTable('personal_intro');

        // $this->forge->addField([
        //     'id_fk'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //     ],   
        //     'id_contact'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //     ],
        //     'phone'=> [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'address' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'email' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'github' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'linkedin' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'created_at timestamp default current_timestamp',
        //     'updated_at timestamp default current_timestamp on update current_timestamp'

        //     ]);

        //     $this->forge->addKey('id_contact', true);
        //     $this->forge->addForeignKey('id_fk', 'personal_intro', 'id');
        //     $this->forge->createTable('contact');
            

        // $this->forge->addField([
        //     'id_fk'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //     ],   
        //     'id_ed'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //          'auto_increment' => true
        //     ],
        //     'education'=> [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'school' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'date' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'description' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],

        //     'created_at timestamp default current_timestamp',
        //     'updated_at timestamp default current_timestamp on update current_timestamp'

        //     ]);

        //     $this->forge->addKey('id_ed', true);
        //     $this->forge->addForeignKey('id_fk', 'personal_intro', 'id');
        //     $this->forge->createTable('education');
            

        //     $this->forge->addField([
        //     'id_ed_fk'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //     ],   
        //     'id_course'=>[
        //         'type' => 'INT',
        //          'unsigned'=>true,
        //         'auto_increment'=>true,
        //     ],
        //     'elective'=> [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],
        //     'course' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '255',
        //         'null' => true,
        //     ],

        //     'created_at timestamp default current_timestamp',
        //     'updated_at timestamp default current_timestamp on update current_timestamp'

        //     ]);

        //     $this->forge->addKey('id_course', true);
        //     $this->forge->addForeignKey('id_ed_fk', 'education', 'id_ed');
        //     $this->forge->createTable('course');
            
        $this->forge->addField([
             'id_ap_fk'=>[
                'type' => 'INT',
                'unsigned'=>true,
           ],   

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
            $this->forge->addForeignKey('id_ap_fk', 'projects', 'id_ap');
            $this->forge->createTable('tech_stacks');
    }

    public function down()
    {
        $this->forge->dropTable('personal_intro');
        $this->forge->dropTable('contact');
        $this->forge->dropTable('education');
        $this->forge->dropTable('course');
        $this->forge->dropTable('contact');
        $this->forge->dropTable('projects');
        $this->forge->dropTable('tech_stacks');
    }

}
