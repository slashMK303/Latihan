<?php
session_start();
include 'koneksi.php';

// Cek apakah form login telah disubmit
$username = $_POST['username'];
$password = md5($_POST['password']);

// Validasi input
$query = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$query->bind_param("ss", $username, $password);
$query->execute();
$result = $query->get_result();

// Cek apakah ada hasil yang ditemukan
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['username'];
    header("Location: home.php");
    exit();
}

echo "<script>alert('Username atau password salah.'); window.location='login.php';</script>";
