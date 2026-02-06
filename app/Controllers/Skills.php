<?php

namespace App\Controllers;

use App\Models\skillModel;

class Skills extends BaseController
{
    public function index(): string
    {
        

        return view('head')
            . view('navbar')
            . view('skills')
            . view('footer');
    }
}
