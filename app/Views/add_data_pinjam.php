<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjam Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <div class="container">
    <h1 style="font-family: 'Inter', sans-serif;" class="fw-bold text-center mt-4"> Tambah Daftar Peminjam Buku </h1>
    <form method="post" action="<?= base_url('proses_add_pinjam') ?>">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Nama Mahasiswa </label>
        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan nama mahasiswa">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Judul Buku </label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukkan judul buku yang dipinjam">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Project Leader </label>
        <input type="text" class="form-control" id="project_leader" name="project_leader" placeholder="Masukkan Project Leader Anda">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Tanggal Peminjaman </label>
        <input type="text" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Masukkan tanggal peminjaman buku">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Tanggal Pengembalian </label>
        <input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="Masukkan tanggal pengembalian">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="ri-checkbox-circle-fill me-1"></i> Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>