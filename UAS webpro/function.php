<?php
$conn = mysqli_connect('localhost', 'root', '', 'UAS_1904030116');

function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tbl_barang WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['Id'];
  $Nama_Barang = htmlspecialchars($data['Nama_Barang']);
  $Stok = htmlspecialchars($data['Stok']);
  $Harga = htmlspecialchars($data['Harga']);
  $Foto = htmlspecialchars($data['Foto']);

  $query = "UPDATE  Data_Barang SET
  nama ='$Nama_Barang',
  stok ='$Stok',
  harga ='$Harga',
  foto ='$Foto'
  WHERE id =$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM tbl_barang WHERE Nama_Barang
   LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function delete($iid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM komentar WHERE id =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}