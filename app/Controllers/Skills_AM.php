<?php

namespace App\Controllers;

use App\Models\skillCateModel;
use App\Models\skillModel;

class Skills_AM extends BaseController
{
    public function index(): string
    {
        $skillModel = new skillModel();
        $data['skill'] = $skillModel
            ->select('skill_tbl.*, skill_cate_tbl.name AS category_name')
            ->join('skill_cate_tbl', 'skill_tbl.category = skill_cate_tbl.id', 'inner')
            ->findAll();
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/skill', $data)
            . view('admin/footer');
    }
    public function addFrm(): string
    {
        $skillModel = new skillCateModel();
        $data['cate'] = $skillModel->findAll();
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/skillFrm', $data)
            . view('admin/footer');
    }
    public function save()
    {
        $experienceModel = new skillModel();
        $data = [
            'skill_name' => $_POST['skillName'],
            'category' => $_POST['category'],
            'level' => $_POST['level']

        ];

        $experienceModel->insert($data);
        return redirect()->to(base_url('admin/skill'));
    }
    public function update()
    {
        $experienceModel = new skillModel();
        $data = [
            'skill_name' => $_POST['skillName'],
            'category' => $_POST['category'],
            'level' => $_POST['level']

        ];

        $experienceModel->update($_POST['id'], $data);
        return redirect()->to(base_url('admin/skill'));
    }
    public function edit($id)
    {
        $skillCateModel = new skillCateModel();
        $skillModel = new skillModel();
        $data['cate'] = $skillCateModel->findAll();
        $data['skill'] = $skillModel->find($id);
        return view('admin/head')
            . view('admin/navigate')
            . view('admin/skillFrm', $data)
            . view('admin/footer');
    }
    public function delete($id)
    {
        $skillModel = new skillModel();
        $skillModel->delete($id);
        return redirect()->to(base_url('admin/skill'));
    }
}
