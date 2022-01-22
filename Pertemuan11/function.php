<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmstr5');

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

  $nama = htmlspecialchars($data['Nama']);
  $alamat = htmlspecialchars($data['Alamat']);
  $jenis_kelamin = htmlspecialchars($data['Jenis_Kelamin']);
  $agama = htmlspecialchars($data['Agama']);
  $sekolah_asal = htmlspecialchars($data['Sekolah_Asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "INSERT INTO calon_mahasiswa
  VALUES
  ('','$nama','$alamat','$jenis_kelamin',''$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM calon_mahasiswa WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['ID'];
  $nama = htmlspecialchars($data['Nama']);
  $alamat = htmlspecialchars($data['Alamat']);
  $jenis_kelamin = htmlspecialchars($data['Jenis_Kelamin']);
  $agama = htmlspecialchars($data['Agama']);
  $sekolah_asal = htmlspecialchars($data['Sekolah_Asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mahasiswa SET
  Nama ='$nama',
  Alamat ='$alamat',
  Jenis_Kelamin ='$jenis_kelamin',
  Agama ='$agama',
  Sekolah_Asal ='$sekolah_asal',
  foto_maba ='$foto_maba'
  WHERE id =$id;";
  
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM calon_mahasiswa WHERE Nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows =[];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $row;
}