<?php
session_start();
include 'koneksi.php';

// Cek apakah form login telah disubmit
$username = $_POST['username'];
$password = md5($_POST['password']);

// Validasi input
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

// Cek apakah ada hasil yang ditemukan
if ($result->num_rows) {
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
}

echo "<script>alert('Username atau password salah.'); window.location='login.php';</script>";
