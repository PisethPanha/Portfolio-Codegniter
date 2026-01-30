<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('head')
                .view('navbar')
                .view('about')
                .view('footer')
        ;
    }
}
