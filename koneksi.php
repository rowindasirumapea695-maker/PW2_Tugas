<?php
$host = "locathost";
$db   = "praktek1_dblab";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $E) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>