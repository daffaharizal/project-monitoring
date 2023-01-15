<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pinjam Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <div class="container">
    <h1 style="font-family: 'Inter', sans-serif;" class="fw-bold text-center mt-4"> Edit Data Peminjam Buku </h1>
    <form method="post" action="<?= base_url('proses_edit_pinjam') ?>">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Nama Mahasiswa </label>
        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $data_pinjam->nama_mahasiswa ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Judul Buku </label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $data_pinjam->judul_buku ?>">
      </div>
      <input type="hidden" class="form-control" id="id_pinjam" name="id_pinjam" value="<?= $data_pinjam->id ?>">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Project Leader </label>
        <input type="text" class="form-control" id="project_leader" name="project_leader" value="<?= $data_pinjam->project_leader ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Tanggal Peminjaman </label>
        <input type="text" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $data_pinjam->tanggal_pinjam ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Tanggal Pengembalian </label>
        <input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?= $data_pinjam->tanggal_pengembalian ?>">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="ri-checkbox-circle-fill me-1"></i> Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>