<?php
session_start();
require 'koneksi.php';

if (isset($_POST['update_profil'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_lengkap'];
    $password = $_POST['password'];

    // Cek apakah user mengisi password baru
    if (!empty($password)) {
        $pass_hash = md5($password); // Sesuaikan dengan sistem login Anda yang menggunakan md5
        $sql = "UPDATE pengguna SET nama_lengkap='$nama', password='$pass_hash' WHERE id='$id'";
    } else {
        $sql = "UPDATE pengguna SET nama_lengkap='$nama' WHERE id='$id'";
    }

    if ($koneksi->query($sql)) {
        // Perbarui nama di session agar navbar langsung berubah
        $_SESSION['nama_lengkap'] = $nama;
        header("Location: index.php?p=home");
        exit();
    } else {
        echo "Gagal memperbarui data: " . $koneksi->error;
    }
} else {
    header("Location: index.php");
    exit();
}
?>