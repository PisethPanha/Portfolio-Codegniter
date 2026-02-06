<?php

namespace App\Models;

use CodeIgniter\Model;

class clientModel extends Model
{
    protected $table = 'client_tbl';
    protected $allowedFields = ['name', 'email', 'subject', 'description', 'contact_date'];
}