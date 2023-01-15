<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/style.css">
</head>

<body style="background-color: #DBEAFE;">
  <div class="container" style="font-family: 'Inter', sans-serif;">
    <h1 class="fw-bold text-center py-3 text-success"> Project Monitoring </h1>
    <div style="font-family: 'Inter', sans-serif;" class="p-4 bg-white rounded shadow-sm table-responsive">
      <a href="<?= base_url('add_data_pinjam') ?>" class="btn btn-primary mb-1 sticky-md-top"><i class="ri-add-circle-fill pt-4 me-1"></i>Tambah Data Project</a>
      <table class="table table-borderless rounded bg-white mt-2">
        <thead class="table-light">
          <tr>
            <th scope="col" class="fw-bold"> ID </th>
            <th scope="col" class="fw-bold"> PROJECT NAME </th>
            <th scope="col" class="fw-bold"> CLIENT</th>
            <th scope="col" class="fw-bold"> PROJECT LEADER</th>
            <th scope="col" class="fw-bold"> START DATE </th>
            <th scope="col" class="fw-bold"> END DATE </th>
            <th scope="col" class="fw-bold"> PROGRESS </th>
            <th colspan="2" scope="colgroup" class="fw-bold"> ACTION </th>
          </tr>
        </thead>
        <tbody class="m-2">
          <?php $no = 1; ?>
          <?php
          foreach ($all_pinjam_buku as $pinjam) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $pinjam->nama_mahasiswa; ?></td>
              <td><?= $pinjam->judul_buku; ?></td>
              <td>
                <p class="m-0"><?= $pinjam->project_leader; ?></p>
                <p class="text-secondary mb-2"><?= $pinjam->leader_email; ?></p>
              </td>
              <td><?= $pinjam->tanggal_pinjam; ?></td>
              <td><?= $pinjam->tanggal_pengembalian; ?></td>
              <td class="mx-4">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 25%">25%</div>
                </div>
              </td>
              <td class="pl-2">
                <a href="<?= base_url('delete_data_pinjam') . '/' . $pinjam->id ?>" class="btn btn-danger btn-sm mb1-md"><i class="ri-delete-bin-7-fill mb1-md"></i></a>
                <a href="<?= base_url('edit_data_pinjam') . '/' . $pinjam->id ?>" class="btn btn-success btn-sm"><i class="ri-pencil-fill"></i></a>
              </td>
              <td class="px-0 m-0"></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>