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
$stmt = $conn->prepare("INSERT INTO menu (name, category, price) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $name, $category, $price);
$stmt->execute();
header("Location: home.php");
