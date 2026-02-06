<?php

namespace App\Controllers;

use App\Models\projectModel;

class Project_AM extends BaseController
{
    public function index(): string
    {   
        $projectModel = new projectModel();
        $data['project'] = $projectModel->findAll();
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/project', $data)
        .view('admin/footer')
        ;
    }
}
