<?php
include 'db.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $conn->query("DELETE FROM mahasiswa WHERE id = $id");
}

header("Location: index.php");
exit;
?>
