<?php

namespace App\Controllers;

class Skills extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('skills')
                .view('footer')
        ;
    }
}
