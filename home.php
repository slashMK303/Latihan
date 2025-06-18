<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';
$menu = $conn->query("SELECT * FROM menu");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
    <a href="logout.php">LogOut</a>

    <h3>Daftar Menu</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1;
        while ($row = $menu->fetch_assoc()) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['category'] ?></td>
                <td>Rp<?= number_format($row['price']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <div class="form-tambah">
        <h3>Tambah Menu</h3>
        <form action="proses_tambah.php" method="post">
            <input type="text" name="name" placeholder="Nama Menu" required>
            <select name="category">
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
            <input type="number" name="price" placeholder="Harga" required>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>

</html>