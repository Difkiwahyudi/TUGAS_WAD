<?php 
require 'function.php';


$id_part = $_GET["id_part"];

$tes = query("SELECT * FROM sparepart WHERE id_part = $id_part")[0]; 

//tombol submit
if(isset ($_POST["submit"])){
 
//cek keberhasilan data
if (ubah($_POST) > 0){
    echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'tokosparepart.php'
        </script>
    
    ";
}else {
    echo "
    <script>
        alert('data gagal diubah');
        document.location.href = 'tokosparepart.php'
    </script>

    ";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Sparepart</title>
</head>
<body>
    <h1>Ubah Data Sparepart</h1>

    <form action="" method="post">
        <input type="hidden" name="id_part" value="<?= $tes["id_part"]; ?>">
        <ul>
            <li>
                <label for="nama_part">NamaPart : </label><br>
                <input type="text" name="nama_part" id_part="nama_part"
                required value="<?= $tes["nama_part"]; ?>">
            </li>
            <li>
                <label for="warna_part">WarnaPart : </label><br>
                <input type="text" name="warna_part" id_part="warna_part"
                required value="<?= $tes["warna_part"]; ?>">
            </li>
            <li>
                <label for="made_in_part">AsalPart : </label><br>
                <input type="text" name="made_in_part" $id_part="made_in_part"
                required value="<?= $tes["made_in_part"]; ?>">
            </li>
            <li>
                <label for="tanggal">Tanggal Pembuatan : </label><br>
                <input type="text" name="tanggal" id_part="tanggal"
                required value="<?= $tes["tanggal"]; ?>">
            </li>
            <li>
            <label for="gambar_part">Gambar : </label><br>
                <input type="text" name="gambar_part" $id_part="gambar_part" value="<?= $tes["gambar_part"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>




</body>
</html>