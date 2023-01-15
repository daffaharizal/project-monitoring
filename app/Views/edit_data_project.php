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
    <h1 style="font-family: 'Inter', sans-serif;" class="fw-bold text-center mt-4 mb-4 text-success"> Edit Data Project </h1>
    <form method="post" action="<?= base_url('proses_edit_project') ?>">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Project Name </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="project_name" name="project_name" value="<?= $data_project->project_name ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Client </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="client" name="client" value="<?= $data_project->client ?>">
      </div>
      <input style="outline: solid 1px green;" type="hidden" class="form-control" id="id_project" name="id_project" value="<?= $data_project->id ?>">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Project Leader </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="project_leader" name="project_leader" value="<?= $data_project->project_leader ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> Start Date </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="start_date" name="start_date" value="<?= $data_project->start_date ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> End Date </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="end_date" name="end_date" value="<?= $data_project->end_date ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-success fw-bold"> End Date </label>
        <input style="outline: solid 1px green;" type="text" class="form-control" id="progress" name="progress" value="<?= $data_project->progress ?>">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="ri-checkbox-circle-fill me-1"></i> Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>