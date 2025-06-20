<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact extends Model
{
   protected $table = 'contact';
   protected $primaryKey = 'id_contact';
   protected $foreignKey = 'id_fk';
   protected $allowedFields = ['phone', 'address', 'email', 'github', 'linkedin'];
}
