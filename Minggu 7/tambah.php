<?php 
require 'function.php';


//tombol submit
if(isset ($_POST["submit"])){
 
//cek keberhasilan data
if (tambah ($_POST) > 0){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tokosparepart.php'
        </script>
    
    ";
}else {
    echo "
    <script>
        alert('data gagal ditambahkan');
        document.location.href = 'tokosparepart.php'
    </script>

    ";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Sparepart</title>
</head>
<body>
    <h1>Tambah Data Sparepart</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_part">NamaPart : </label><br>
                <input type="text" name="nama_part" id="nama_part"
                required>
            </li>
            <li>
                <label for="warna_part">WarnaPart : </label><br>
                <input type="text" name="warna_part" id="warna_part"
                required>
            </li>
            <li>
                <label for="made_in_part">AsalPart : </label><br>
                <input type="text" name="made_in_part" id="made_in_part"
                required>
            </li>
            <li>
                <label for="tanggal">Tanggal Pembuatan : </label><br>
                <input type="text" name="tanggal" id="tanggal"
                required>
            </li>
            <li>
            <label for="gambar_part">Gambar : </label><br>
                <input type="text" name="gambar_part" id="gambar_part">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>




</body>
</html>