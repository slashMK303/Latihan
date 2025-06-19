<?php
include 'koneksi.php';
$id = $_GET['id'];
$conn->query("DELETE FROM menu WHERE id=$id");
header("Location: home.php");
