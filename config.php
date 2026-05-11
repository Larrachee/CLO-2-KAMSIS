<?php
$host
$db
$user
$user
$pass
try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user , $pass);
} catch )PDOException $e){
  die("Koneksi gagal: " . $e->getMessage());
}
?>
