<?php

namespace App\Models;

use CodeIgniter\Model;

class skillModel extends Model
{
    protected $table = 'skill_tbl';
    protected $allowedFields = ['skill_name', 'category', 'level'];
}