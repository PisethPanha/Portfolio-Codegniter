<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('projects')
                .view('footer')
        ;
    }
}
