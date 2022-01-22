<!DOCTYPE html>
<html>
        <head>
            <title>pertemuan 5</title>
        </head>
    <body>


<h3>SYNTAX IF STATEMEN</h3>
<?php
    $nilai=90;
    $absen=90;

    if ($nilai>=80 && $absen >= 80) {
        echo "Anda Lulus" . "</br>";
    }
?>
<hr>

<h3>ELSE STATEMENT</h3>
<?php
$nilai = 70;
$absen = 90;

if ($nilai >=80 && $absen >=80){
    echo "Anda Lulus" . "</br>";
} else {
    echo "Anda Tidak Lulus" . "</br>";
}
?>
<hr>

<h3>ELSE IF STATEMENT</h3>
<?php
$nilai=70;
$absen=70;

if ($nilai>=80 && $absen>=80) {
    echo"Anda Lulus" . "</br>";
} else if ($nilai>=70 && $absen>=70) {
    echo "Nilai Anda B" . "</br>";
} else if ($nilai>=60 && $absen>=60) {
    echo "Nilai Anda C" . "</br>";
} else if ($nilai>=50 && $absen>=50) {
    echo "Nilai Anda D" . "</br>";
} else 
    echo "Nilai Anda E" . "</br>";

?>
<hr>

<h3>IF STATEMENT DENGAN COLON</h3>
<?php
$nilai=70;
$absen=70;

if ($nilai>=80 && $absen>=80) :
    echo"Anda Lulus" . "</br>";
elseif ($nilai>=70 && $absen>=70) :
    echo "Nilai Anda B" . "</br>";
elseif ($nilai>=60 && $absen>=60) :
    echo "Nilai Anda C" . "</br>";
elseif ($nilai>=50 && $absen>=50) :
    echo "Nilai Anda D" . "</br>";
else :
    echo "Nilai Anda E" . "</br>";
endif;
?>
<hr>

<h3>SWITCH STATEMENT</h3>
<?php
$nilai="B";

switch ($nilai){
    case "A":
        echo "Anda Lulus dengan sangat baik" . "</br>";
        break;
    case "B":
    case "C":
        echo "Anda lulus" . "</br>";
        break;
    case "D":
        echo "Anda tidak lulus" . "</br>";
        break;
    default:
    echo "Mungkin anda salah jurusan" . "</br>";
}
?>
<hr>

<h3>SWITCH STATEMENT SYNTAX ALTERNATIF</h3>
<?php 
$nilai="C";

switch ($nilai):
    case "A":
        echo "Anda Lulus dengan sangat baik" . "</br>";
        break;
    case "B":
    case "C":
        echo "Anda lulus" . "</br>";
        break;
    case "D":
        echo "Anda tidak lulus" . "</br>";
        break;
    default:
    echo "Mungkin anda salah jurusan" . "</br>";
endswitch;
?>