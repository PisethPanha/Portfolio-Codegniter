<?php

namespace App\Models;

use CodeIgniter\Model;

class LogoModel extends Model
{
    protected $table            = 'logo_tbl';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['short_name', 'long_name', 'font_style', 'font_weight'];

   
}
