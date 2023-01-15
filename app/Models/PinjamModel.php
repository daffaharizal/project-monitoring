<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
  protected $table = 'tabel_project_monitoring';
  protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $allowedFields = ['start_date', 'project_name', 'client', 'project_leader', 'leader_email', 'end_date', 'progress'];
}
