<?php

namespace App\Models;

use CodeIgniter\Model;

class TechStacks extends Model
{
    protected $table = 'tech_stacks';
    protected $primaryKey = 'id_stack';
    protected $allowedFields = ['tech_name','used_stack'];
}
