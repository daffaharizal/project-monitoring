<?php

namespace App\Controllers;

use App\Models\PinjamModel;
use CodeIgniter\Controller;

class Pinjam extends BaseController
{
  public function index()
  {
    $pinjam_model = new PinjamModel();
    $all_project_monitoring = $pinjam_model->findAll();
    return view('pinjam', ['all_project_monitoring' => $all_project_monitoring]);
  }

  public function add_data_pinjam()
  {
    return view('add_data_pinjam');
  }

  public function proses_add_pinjam()
  {
    $pinjam_model = new PinjamModel();
    $pinjam_model->insert($this->request->getPost());
    return redirect()->to(base_url('pinjam'));
  }

  public function edit_data_pinjam($id = false)
  {
    $pinjam_model = new PinjamModel();
    $data_pinjam = $pinjam_model->find($id);
    return view('edit_data_pinjam', ['data_pinjam' => $data_pinjam]);
  }

  public function proses_edit_pinjam()
  {
    $pinjam_model = new PinjamModel();
    $pinjam_model->update($this->request->getPost('id_pinjam'), $this->request->getPost());
    return redirect()->to(base_url('pinjam'));
  }

  public function delete_data_pinjam($id = false)
  {
    $pinjam_model = new PinjamModel();
    $pinjam_model->delete($id);
    return redirect()->to(base_url('pinjam'));
  }
}
