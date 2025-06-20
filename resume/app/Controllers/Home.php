<?php

namespace App\Controllers;

use App\Models\PersonalInfo;
use App\Models\Contact;
use App\Models\Education; 
use App\Models\Course; 
use App\Models\Projects;
use App\Models\ProjectConn;
use App\Models\TechStacks;

class Home extends BaseController
{
    public function index(): string
    {
            $personalInfoModel = new PersonalInfo();
            $contactModel = new Contact();
            $educationModel = new Education(); 
            $courseModel = new Course(); 
            $projectModel = new Projects();
            $connModel = new ProjectConn();
            $stackModel = new TechStacks();

            $data = [
                'personal_data' => $personalInfoModel->findAll(),
                'contact_data' => $contactModel->findAll(),
                'education_data' => $educationModel->findAll(),
                'course_data' => $courseModel->findAll(),
                'tech_stacks' => $stackModel->findAll(),
            ];

            
            $projects = $projectModel->findAll();
        

            foreach ($projects as &$project) {
                $connections = $connModel
                    ->where('id_ap_fk', $project['id_ap'])
                    ->findAll();
                
                $tech_stack_ids = array_column($connections, 'id_stack_fk');

                $tech_data = [];
                if (!empty($tech_stack_ids)) {
                    $tech_data = $stackModel
                        ->whereIn('id_stack', $tech_stack_ids)
                        ->findAll();
                          
                }

                $project['tech_stacks'] = $tech_data;
            }
            $data['projects'] = $projects;

            return view('index', $data);

        }
    
}
