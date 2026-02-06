<?php

namespace App\Models;

use CodeIgniter\Model;

class contactModel extends Model
{
    protected $table            = 'contactInfo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['email', 'phone', 'address', 'linkedin', 'github', 'twitter'];

   
}
