<?php
$host = "172.206.24.100";
$user = "dhafinkamil";
$pass = "Deviant201203";                    
$db   = "cloud_crud";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
