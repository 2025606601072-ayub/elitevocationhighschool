<?php
include '../koneksi.php'; // Sudah benar untuk keluar dari folder admin

// Mengamankan data ID dengan casting ke integer (jika ID berupa angka)
// atau menggunakan mysqli_real_escape_string
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Memperbaiki query (menghilangkan kelebihan tanda petik di ujung)
$query = "DELETE FROM pengguna WHERE id = '$id'";
mysqli_query($conn, $query);

// Memperbaiki penulisan Location (L kapital dan pakai spasi)
header("Location: tambah-pengguna.php");
exit(); // Selalu tambahkan exit setelah header redirect
?>