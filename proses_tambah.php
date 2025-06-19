<?php
include 'koneksi.php';

// Cek apakah form telah disubmit
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];

if ($price <= 1000) {
    echo "<script>alert('Harga harus lebih dari 1000.'); window.location='home.php';</script>";
    exit();
}

// Validasi input
$sql = "INSERT INTO menu (name, category, price) VALUES ('$name', '$category', '$price')";
$conn->query($sql);
header("Location: home.php");
