<?php

namespace App\Models;

use CodeIgniter\Model;

class Course extends Model
{
   protected $table = 'course';
   protected $primaryKey = 'id_course';
   protected $foreignKey = 'id_ed_fk';
   protected $allowedFields = ['elective', 'course'];
}
