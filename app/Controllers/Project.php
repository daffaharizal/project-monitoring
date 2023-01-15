<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Project extends BaseController
{
  public function index()
  {
    $project_model = new ProjectModel();
    $all_project_monitoring = $project_model->findAll();
    return view('pinjam', ['all_project_monitoring' => $all_project_monitoring]);
  }

  public function add_data_project()
  {
    return view('add_data_project');
  }

  public function proses_add_pinjam()
  {
    $project_model = new ProjectModel();
    $project_model->insert($this->request->getPost());
    return redirect()->to(base_url('pinjam'));
  }

  public function edit_data_project($id = false)
  {
    $project_model = new ProjectModel();
    $data_pinjam = $project_model->find($id);
    return view('edit_data_project', ['data_pinjam' => $data_pinjam]);
  }

  public function proses_edit_pinjam()
  {
    $project_model = new ProjectModel();
    $project_model->update($this->request->getPost('id_pinjam'), $this->request->getPost());
    return redirect()->to(base_url('pinjam'));
  }

  public function delete_data_pinjam($id = false)
  {
    $project_model = new ProjectModel();
    $project_model->delete($id);
    return redirect()->to(base_url('pinjam'));
  }
}
