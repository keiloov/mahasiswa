<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="post">
        Nama : <input type="text" name="nama"><br>
        NIM: <input type="text" name="nim"><br>
        <button type="submit">Simpan</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];

        $conn->query ("INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')");

        header("Location: index.php");
    }
    
    
    
    ?>
</body>
</html>