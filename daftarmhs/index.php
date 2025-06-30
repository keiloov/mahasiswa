<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">+ tambah data</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
    <?php
    $result = $conn->query("SELECT * FROM mahasiswa");
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>$no</td>
            <td>{$row['nama']}</td>
            <td>{$row['nim']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a>
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Hapus?\")'>Hapus</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
    </table>
</body>
</html>
