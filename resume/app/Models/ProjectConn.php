<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectConn extends Model
{
    protected $table = 'proj_conn';
    protected $primaryKey = 'id_proj_conn';
    protected $foreignKey = ['id_stack_fk', 'id_ap_fk'];
}
