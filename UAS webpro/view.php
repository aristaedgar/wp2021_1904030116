<?php
date_default_timezone_get("Asia/Jakarta");

include 'koneksi.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

  <div class="row mt-2">
    <div class="col-md-2  pr-3 pt-4 bg-secondary">
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
          <a class="nav-link text-white" href="detail_komen.php"><i class="fas fa-comments"></i></i></i>Komentar</a>
          <hr>

      </ul>
    </div>
    <div class="col-md-10 p-4 pt-4">

      <!-- konten -->
      <h3><i class="fas fa-store"></i></i></i></i></i></i> Sembako</h3>
      <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($barang = mysqli_fetch_row($result)) { ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $barang[1]; ?></td>
              <td><?php echo $barang[2]; ?></td>
              <td><?php echo $barang[3]; ?></td>
              <td><?php echo $barang[4]; ?></td>
              <td><?php echo $barang[5]; ?></td>
              <td><?php echo $barang[6]; ?></td>

              <td><img src="image/gorengg" width="95px"></td>
              <td><img src="image/soto" width="95px"></td>
              <td><img src="image/bawang" width="95px"></td>
              <td><img src="image/saos" width="95px"></td>
              <td><img src="image/kecap" width="95px"></td>
              <td><img src="image/telur" width="95px"></td>
              <td><i class="fas fa-edit"></i> || <i class="fas fa-trash"></i></td>
            </tr>
            <?php $no++ ?>
          <?php } ?>
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