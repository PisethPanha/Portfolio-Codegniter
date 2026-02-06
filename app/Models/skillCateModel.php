<?php

namespace App\Models;

use CodeIgniter\Model;

class skillCateModel extends Model
{
    protected $table = 'skill_cate_tbl';
    protected $allowedFields = ['id', 'name'];
}