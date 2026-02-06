<?php

namespace App\Controllers;

use App\Models\projectModel;

class Project extends BaseController
{
    public function index(): string
    {
        $projectModel = new projectModel();
        $data['project'] = $projectModel->findAll();
        return view('head')
                .view('navbar')
                .view('projects', $data)
                .view('footer')
        ;
    }
}
