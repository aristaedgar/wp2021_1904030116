<?php
date_default_timezone_get("Asia/Jakarta");

require 'function.php';
$barang = query("SELECT * FROM tbl_barang");

if (isset($_POST['cari'])) {
  $barang = cari($_POST['keyword']);
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Warung Rakha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="text-white">
          <?php echo date('l, d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- sidebar -->

  <div class="row">
    <div class="col-md-2 pr-3 pt-4 bg-secondary">
      <!-- menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-store"></i></i> Data Barang</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="komentar.php"><i class="fas fa-comments"></i></i></i> Komentar</a>
          <hr>
        </li>

      </ul>
    </div>

    <div class="col-md-10 p-3 pt-3">
      <!-- konten -->
      <h3><i class="fas fa-store"></i></i></i> Sembako</h3>
      <hr>

      <!-- pencarian data -->
      <form action=" " method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="Cari Barang" autocomplete="">
        <button type="submit" class="btn btn-primary" name="cari">Cari</button>
      </form>

      <table class="table table-striped">
        <thead>

          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi </th>
          </tr>
        </thead>

        <?php if (empty($barang)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p><b>
                  <p> Nama Barang Tidak Ditemukan</p>
            </td>
          </tr>
        <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($barang as $brg) : ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $brg['Nama_Barang']; ?></td>
              <td><img src="image/<?php echo $brg['Foto']; ?>" width="80px"></td>
              <td><a href="detail.php?id=<?= $brg['Id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>