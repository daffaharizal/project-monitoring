<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
  protected $table = 'tabel_pinjam_buku';
  protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $allowedFields = ['tanggal_pinjam', 'nama_mahasiswa', 'judul_buku', 'project_leader', 'tanggal_pengembalian'];
}
