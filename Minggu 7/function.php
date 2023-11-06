<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tokosparepart");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama_part = htmlspecialchars($data["nama_part"]);
    $warna_part = htmlspecialchars($data["warna_part"]);
    $made_in_part = htmlspecialchars($data["made_in_part"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambar_part = htmlspecialchars($data["gambar_part"]);

    // Gunakan prepared statements untuk mencegah SQL injection
    $query = "INSERT INTO sparepart (nama_part, warna_part, made_in_part, tanggal, gambar_part)
              VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $nama_part, $warna_part, $made_in_part, $tanggal, $gambar_part);
        mysqli_stmt_execute($stmt);

        // Periksa hasil eksekusi query
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    return false;
}

function hapus($id_part) {
    global $conn;
    $id_part = (int) $id_part; // Pastikan $id_part adalah integer
    mysqli_query($conn, "DELETE FROM sparepart WHERE id_part = $id_part");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id_part = (int) $data["id_part"];
    $nama_part = htmlspecialchars($data["nama_part"]);
    $warna_part = htmlspecialchars($data["warna_part"]);
    $made_in_part = htmlspecialchars($data["made_in_part"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambar_part = htmlspecialchars($data["gambar_part"]);

    // Gunakan prepared statements untuk mencegah SQL injection
    $query = "UPDATE sparepart SET
                nama_part = ?,
                warna_part = ?,
                made_in_part = ?,
                tanggal = ?,
                gambar_part = ?
                WHERE id_part = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssi", $nama_part, $warna_part, $made_in_part, $tanggal, $gambar_part, $id_part);
        mysqli_stmt_execute($stmt);

        // Periksa hasil eksekusi query
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    return false;
}
?>
