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
    return view('project', ['all_project_monitoring' => $all_project_monitoring]);
  }

  public function add_data_project()
  {
    return view('add_data_project');
  }

  public function proses_add_project()
  {
    $project_model = new ProjectModel();
    $project_model->insert($this->request->getPost());
    return redirect()->to(base_url('project'));
  }

  public function edit_data_project($id = false)
  {
    $project_model = new ProjectModel();
    $data_project = $project_model->find($id);
    return view('edit_data_project', ['data_project' => $data_project]);
  }

  public function proses_edit_project()
  {
    $project_model = new ProjectModel();
    $project_model->update($this->request->getPost('id_project'), $this->request->getPost());
    return redirect()->to(base_url('project'));
  }

  public function delete_data_project($id = false)
  {
    $project_model = new ProjectModel();
    $project_model->delete($id);
    return redirect()->to(base_url('project'));
  }
}
