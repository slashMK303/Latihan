# **📋 Soal Game: "JKT48 Cafe"**

**Durasi: 90 menit**

**JKT48 Cafe menjual berbagai jenis menu **makanan** dan **minuman** yang bertema jejepangan. Mereka ingin memperkenalkan menu mereka melalui aplikasi web sederhana yang dapat menampilkan. Buatkan aplikasi web sederhana sesuai spesifikasi berikut:**

---

# USER

-   usernama : nanang015
-   password : password

# Metode hash

-   INSERT INTO users (username, password)
    VALUES ('nanang015', MD5('password'));

## A. Halaman Login (20 poin)

### 1. Buat **halaman login** (`login.php`) menggunakan HTML dan CSS yang responsif.

### 2. Form terdiri dari dua input:

-   Username
-   Password

### 3. Tambahkan tombol **“Login”**.

---

## B. Autentikasi (20 poin)

### 1. Buat database MySQL bernama `jkt48_cafe`.

### 2. Buat tabel `users` yang memiliki atribut sebagai berikut:

-   id INT AUTO_INCREMENT PRIMARY KEY,
-   username VARCHAR(50) UNIQUE NOT NULL,
-   password VARCHAR(255) NOT NULL

### 3. Isi tabel users dengan minimal satu akun dengan username `{namanim}` dan password `{bebas}` & di hash (misal: username `lily777` dan hash(`mylofly123`)).

### 4. Buat logika PHP untuk:

-   Mencocokkan username & password input dengan data di database.
-   Jika benar, simpan username (atau user_id) di session dan redirect ke home.php.
-   Jika salah, tampilkan alert JavaScript "Username atau password salah."

---

## C. Proteksi Halaman Home (10 poin)

### 1. Di home.php, cek apakah session login aktif.

### 2. Jika tidak, redirect kembali ke login.php.

---

## D. Halaman Home - Menampilkan & Mengelola Data (30 poin)

### 1. Tampilkan pesan sambutan diatas halaman berupa (Pastikan warna font berupa gradiasi):

    Welcome, {session(username)}

### 2. Buat tabel `menu` yang memiliki atribut sebagai berikut:

-   id INT AUTO_INCREMENT PRIMARY KEY,
-   name VARCHAR(100) NOT NULL,
-   category ENUM('makanan','minuman'),
-   price INT NOT NULL

### 3. Tampilkan daftar isi produk dalam tabel HTML dengan kolom:

-   No
-   Nama
-   Kategori
-   Harga
-   Aksi

### 4. Buat form di bawah tabel untuk menambah data produk:

-   Form terdiri dari tiga input:
    -   Nama
    -   Kategori
    -   Harga
-   Tambahkan tombol **"Tambah"**.

### 5. Pada setiap baris, tambahkan tombol "Hapus" untuk menghapus produk berdasarkan id.

---

## E. Logout (10 poin)

### 1. Tambahkan tombol Logout di home.php.

### 2. Aksi logout akan:

-   Hapus session login.
-   Redirect ke login.php.

---
