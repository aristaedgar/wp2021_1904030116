<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'UAS_1904030116';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM tbl_barang');
