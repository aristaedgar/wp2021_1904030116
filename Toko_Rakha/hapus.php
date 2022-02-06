<?php
require "functions.php";

//  agar tidak bisa masuk secara pengetikan manual pada URL 
if (!isset($_GET['Id'])) {
  header("location: index.php");
  exit;
}

$Id = $_GET['Id'];
if (hapus($Id) > 0) {
  echo
  "<script>
    alert('Data berhasil di Hapus');
    document.location.href = 'index.php';
    </script>";
} else {
  echo
  "<script>
    alert('Data gagal di Hapus');
    </script>";
}
