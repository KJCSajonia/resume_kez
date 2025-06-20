<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalInfo extends Model
{
   protected $table = 'personal_intro';
   protected $primaryKey = 'id';
   protected $allowedFields = ['name', 'picture', 'description'];


}
