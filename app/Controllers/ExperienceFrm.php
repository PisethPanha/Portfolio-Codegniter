<?php

namespace App\Controllers;

use App\Models\experienceModel;

class ExperienceFrm extends BaseController
{
    public function index(): string
    {
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/experienceFrm')
        .view('admin/footer')
        ;
    }
    public function save()
    {
        $experienceModel = new experienceModel();
        $data = [
            'company_name' => $_POST['company_name'],
            'job_title' => $_POST['job_title'],
            'duration' => $_POST['duration'],
            'description' => $_POST['description']
           
        ];

        $experienceModel->insert( $data);
        return redirect()-> to(base_url('admin/experience'));
    }

    public function edit($id): string
    {
        $experienceModel = new experienceModel();
        $data['experience'] = $experienceModel->find($id);
        return view('admin/head')
        .view('admin/navigate')
        .view('admin/experienceFrm', $data)
        .view('admin/footer')
        ;
    }
    public function delete($id)
    {
        $experienceModel = new experienceModel();
        $data['experience'] = $experienceModel->delete($id);
        return redirect()-> to(base_url('admin/experience'));
        
    }
    public function update()
    {
        $experienceModel = new experienceModel();
        $data = [
            'company_name' => $_POST['company_name'],
            'job_title' => $_POST['job_title'],
            'duration' => $_POST['duration'],
            'description' => $_POST['description']
           
        ];

        $experienceModel->update( $_POST['id'], $data);
        return redirect()-> to(base_url('admin/experience'));
    }
}