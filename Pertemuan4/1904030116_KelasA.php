<!DOCTYPE html>
<html>
        <head>
            <title>pertemuan 4</title>
        </head>
    <body>
<?php
    $nim1= "Spongebob SquarePants";
    $nim2= "Garry";
    $nim3= "Squidward Tentacles";
    $nim4= "Patrick Star";
    $nim5= "Shandy Cheeks";
?>

<h1>Warga Bikini Bottom</h1>

<?php echo "$nim1";?><br>
<?php echo "$nim2";?><br>
<?php echo "$nim3";?><br>
<?php echo "$nim4";?><br>
<?php echo "$nim5";?><br>
    </body>
</html>

<br>
<?php
$array1 = array("elemen","elemen");
$array2 = ["elemen","elemen"];

$minuman = array("Kelp Shake","Soda","susu");
$makanan = ["Krabby Patty","Acar","KelpO"];
?>


<?php
var_dump ($minuman);
?>


<?php
var_dump ($makanan);
?>
<br><br>
<?php
$nim= ["Spongebob","garry","Squidward","Patrick","Shandy"];
?>
<?php
for($i=0; $i < count($nim); $i++){
    echo $nim[$i]."<br>";
}
?>
<br>
<?php
$books=["Sekolah Mengemudi Ny.Puff","Bikini Bottom"];
foreach($books as $book){
    echo $book."<br>";
}
?>
<bfr><br>
<?php
$hobi=[
    "Menangkap Ubur ubur",
    "Bermain Tic Tac Toe",
    "Minum cokat panas"
    ];

$hobi[2] = "Menyusun puzzle";
$hobi[3] = "Bekerja di Krasty Krab";
$hobi[]= "Bermain dengan Garry";
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>
<br>
<hr>

<?php
$mhs =[
    "nim" => "1904030116",
    "nama" => "Arista Edgar Chinara",
    "fakultas" => "Teknik",
    "jurusan" => "Teknik Informatika",
];

echo "<h2>data mahasiswa</h2>";
echo "<p>Nim: ".$mhs["nim"]."</br>";
echo "<p>Nama: ".$mhs["nama"]."</br>";
echo "<p>Fakultas: ".$mhs["fakultas"]."</br>";
echo "<p>Jurusan: ".$mhs["jurusan"]."</br>";
?>
<br>
<?php
$matrik=[
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

echo $matrik[1][0];
?>
<br>
<hr>




 
<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 4</title>
</head>
<body>
	<h1>membuat array</h1>
	<?php 
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>";
	echo($values[1]);

	echo"<br>";

	$prodi = ["Sipil","Industri","Informatika","Kimia"];
	var_dump($prodi);
	echo"<br>";
	echo($prodi[2]);

	echo"<br>";
	//mengganti isi value
	$prodi[0] = "Nuklir";
	var_dump($prodi);

	echo"<br>";
	//menambahkan value
	$prodi[] = "T.Komputer";
	var_dump($prodi);
	echo"<br>";

	//menghapus salah satu value
	unset($prodi[0]);
	var_dump($prodi);

	echo"<br>";
	//menghitung total array
	var_dump(count($prodi));

	?>
<hr>
	<h1>map dengan array</h1>
<?php 
$AristaEd = array(
			"id" =>"AristaEd",
			"nama" =>"Arista Edgar Chinara",
			"umur" =>"20"
			);
var_dump($AristaEd);
echo"<br>";

$AristaEd = [
		"id" =>"AristaEd",
		"nama" =>"Arista Edgar Chinara.",
		"umur" =>20,
		"alamat" => [
				"kota" => "Tangerang",
				"prov" => ""
				]
		];
var_dump($AristaEd);
echo"<br>";
echo("nama id :" . $AristaEd["id"]);
echo"<br>";
echo("nama lengkap : " . $AristaEd["nama"]);
echo"<br>";
echo("umur : " . $AristaEd["umur"]);

 ?>

<hr>
<h1>Operator MTK</h1>
<?php 
$tambah = 10 + 13;
$kurang = 150 - 145;
$kali = 5*120;
$bagi = 150 / 2;
$modular = 100 % 3;
$pangkat = 5**6;
echo "tambah: "  . $tambah . "<br>";
echo "kurang: "  . $kurang . "<br>";
echo "kali: "  . $kali . "<br>";
echo "bagi: "  . $bagi . "<br>";
echo "modular: "  . $modular . "<br>";
echo "pangkat: "  . $pangkat . "<br>";

 ?>
<hr>
<h2>Increment</h2>
<?php 
$a = 10;
$a++;
$a--;

echo($a);
 ?>
</body>
</html>




