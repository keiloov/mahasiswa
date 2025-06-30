<?php 
include 'db.php'; 
$id = isset($_GET["id"]) ? $_GET["id"] : 0;

// Cegah SQL Injection sederhana
$id = intval($id);

// Ambil data mahasiswa
$data = $conn->query("SELECT * FROM mahasiswa WHERE id = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<h2>Edit Mahasiswa</h2>

<form method="POST">
    Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>"><br>
    NIM: <input type="text" name="nim" value="<?= htmlspecialchars($data['nim']) ?>"><br>
    <button type="submit">Update</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];

    // Hindari SQL injection - sebaiknya gunakan prepared statement di dunia nyata
    $conn->query("UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id = $id");

    // Redirect setelah update
    header("Location: index.php");
    exit;
}
?>

</body>
</html>
