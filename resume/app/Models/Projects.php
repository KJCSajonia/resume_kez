<?php

namespace App\Models;

use CodeIgniter\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_ap';
    protected $foreignKey = ['id_fk'];
    protected $allowedFields = ['project', 'role', 'date', 'description'];
}
