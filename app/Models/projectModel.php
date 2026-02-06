<?php

namespace App\Models;

use CodeIgniter\Model;

class projectModel extends Model
{
    protected $table = 'project_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'stack', 'image', 'demo_link', 'category', 'github'];
}
