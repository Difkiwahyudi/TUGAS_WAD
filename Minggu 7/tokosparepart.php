<?php
require 'function.php';
$sparepart = query("SELECT * FROM sparepart");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="layout.css" rel="stylesheet">
  </head>

  <body>
    <h1>TOKO SPAREPART MOTOR DIFKI WAHYUDI</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            </form>
          </div>
        </div>
      </nav>
      <div><div class="text-left">
    <img src="img/background.jpg" class="rounded" alt="...">
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Toko Sparepart Difki</title>
</head>
<body>

<h1>Daftar SparePart</h1>

<a href="tambah.php">Tambah Data Sparepart</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Warna</th>
        <th>Made in</th>
        <th>Tanggal</th>
        <th>Id Part</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach($sparepart as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id_part=<?= $row["id_part"]; ?>">ubah</a>
                <a href="hapus.php?id_part=<?= $row["id_part"]; ?>" onclick= "
                return confirm('yakin ingin hapus')">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar_part"];?>" width="50"></td>
            <td><?= $row["nama_part"]; ?></td>
            <td><?= $row["warna_part"]; ?></td>
            <td><?= $row["made_in_part"]; ?></td>
            <td><?= $row["tanggal"]; ?></td>
            <td><?= $row["id_part"]; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>
