<?php

namespace App\Models;

use CodeIgniter\Model;

class aboutInfoModel extends Model
{
    protected $table            = 'aboutinfo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['job_title', 'bio', 'story', 'cv'];

   
}
