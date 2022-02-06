<?php
$conn = mysqli_connect('localhost', 'root', '', 'UAS_1904030116');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $Nama_Barang = htmlspecialchars($data['Nama_Barang']);
  $Stok = htmlspecialchars($data['Stok']);
  $Harga = htmlspecialchars($data['Harga']);
  $Foto = htmlspecialchars($data['Foto']);

  //ganti nama database
  $query = "INSERT INTO tbl_barang 
VALUES
('','$Nama_Barang','$Stok','$Harga',' $Foto');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function hapus($Id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tbl_barang WHERE Id=$Id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}



function edit($data)
{
  global $conn;

  $Id = ($data['Id']);
  $Nama_Barang = htmlspecialchars($data['Nama_Barang']);
  $Stok = htmlspecialchars($data['Stok']);
  $Harga = htmlspecialchars($data['Harga']);
  $Foto = htmlspecialchars($data['Foto']);

  $query = "UPDATE tbl_barang SET
  Nama_Barang ='$Nama_Barang',
  Stok ='$Stok',
  Harga ='$Harga',
  Foto ='$Foto',
  WHERE Id=$Id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM tbl_barang WHERE Nama_Barang LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}