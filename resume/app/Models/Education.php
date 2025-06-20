<?php

namespace App\Models;

use CodeIgniter\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id_ed';
    protected $foreignKey = 'id_fk';
    protected $allowedFields = ['school', 'date', 'description'];
}
