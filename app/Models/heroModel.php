<?php

namespace App\Models;

use CodeIgniter\Model;

class heroModel extends Model
{
    protected $table = 'hero_tbl';
    protected $allowedFields = ['name', 'job_title', 'short_bio', 'image', 'experience', 'satisfaction'];
}
