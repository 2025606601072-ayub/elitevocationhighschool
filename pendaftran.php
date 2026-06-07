<?php
include '../koneksi.php';
session_start();

if (isset($_POST['daftar'])) {
    // Menangkap data kiriman form
    $nama_siswa      = mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
    $asal_sekolah    = mysqli_real_escape_string($koneksi, $_POST['asal_sekolah']);
    $pilihan_jurusan = mysqli_real_escape_string($koneksi, $_POST['pilihan_jurusan']);
    $no_whatsapp     = mysqli_real_escape_string($koneksi, $_POST['no_whatsapp']);

    // Proses insert data aman (silakan disesuaikan nama tabel database kamu jika ada)
    // $query = mysqli_query($koneksi, "INSERT INTO pendaftaran VALUES('', '$nama_siswa', '$asal_sekolah', '$pilihan_jurusan', '$no_whatsapp')");

    // Kembalikan ke halaman informasi dengan alert status sukses
    header("Location: informasi.php?status=sukses");
    exit();
} else {
    header("Location: informasi.php");
    exit();
}
?>