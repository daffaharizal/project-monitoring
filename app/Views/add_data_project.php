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
    <h1 style="font-family: 'Inter', sans-serif;" class="fw-bold text-center mt-4 mb-4 text-success"> Tambah Daftar Project </h1>
    <form style="font-family: 'Inter', sans-serif;" method="post" action="<?= base_url('proses_add_project') ?>">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Project Name </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="project_name" name="project_name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Client </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="client" name="client">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Project Leader </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="project_leader" name="project_leader">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Leader Email </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="leader_email" name="leader_email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Start Date </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="start_date" name="start_date">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> End Date </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="end_date" name="end_date">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Persentase Progress (%) </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="progress" name="progress">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="ri-checkbox-circle-fill me-1"></i> Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>