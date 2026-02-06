<?php

namespace App\Models;

use CodeIgniter\Model;

class experienceModel extends Model
{
    protected $table = 'experience_tbl';
    protected $allowedFields = ['company_name', 'job_title', 'duration', 'description'];
}