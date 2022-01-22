<!DOCTYPE html>
<html>
    <head>
        <title>Pertemuan 3</title>
    </head>
    <body>
        <!-- PHP dalam HTML -->
        <h1>Selamat Datang, <?php echo "Arista"; ?></h1>

        <!-- tag HTML dalam PHP -->
        <?php echo "<h2>Di Pembelajaran Web Programing</h2>";?>
<hr>        
        <h2>Tipe Data Integer</h2>

        <?php
        echo "Desimal : " ; var_dump(1999); echo "<br>";
        echo "Octal : " ; var_dump(1998); echo "<br>";
        echo "Hexadesimal : " ; var_dump(0x1a); echo "<br>";
        echo "Binary : " ; var_dump(0b111111); echo "<br>";
        echo "Underscore di nomor : " ; var_dump(1505000); echo "<br>";
        ?>

        <hr>
        <h2>Variabel</h2>
        <?php
        $nama = "Arista Edgar Chinara";
        $prodi = "Teknik Informatika";
        $hobi = "Nonton & makan";
        ?>

        <h4>Identitas Diri</h4>
        <p>Nama : <?php echo $nama; ?></p>
        <p>Prodi : <?php echo $prodi; ?></p>
        <p>Hobi : <?php echo $hobi; ?></p>

    </body>
</html>