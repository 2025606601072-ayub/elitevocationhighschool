<?php
include '../koneksi.php';
session_start();

// Cek otomatis nama variabel koneksi
if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil data pengguna dari database secara real-time
$query = "SELECT * FROM pengguna ORDER BY id DESC";
$ambil_data = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Manajemen Pengguna - ELITE VOCATION HIGH SCHOOL</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=3.0">
    </head>

    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand">
                        ELITE<br>VOCATION<br>HIGH SCHOOL<br>精英职业高级中学<br>

                    </div>
                 </div>

                 <ul class="nav-menu">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="pengguna.php">Pengguna</a></li>
                    <li><a href="jurusan.php">Jurusan</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    
                    <li class="dropdown-wrapper">
                        <a href="#">Pengaturan ▾</a>
                        <ul class="dropdown">
                            <li><a href="indentitas-sekolah.php">Identitas Sekolah</a></li>
                            <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                            <li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown-wrapper">
                        <a href="#">Akun ▾</a>
                        <ul class="dropdown">
                            <li><a href="ubah-password.php">Ubah Password</a></li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                 </ul>
            </div>
        </div>

        <div class="content" style="margin-top: 120px;">
            <div class="container">
                <div class="box">
                     <div class="box-header">
                        Manajemen Pengguna
                     </div>
                     <div class="box-body">
                        
                        <a href="tambah-pengguna.php" class="btn-tambah" style="display: inline-block; padding: 10px 15px; background-color: #121F2D; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; margin-bottom: 20px;">+ Tambah Pengguna</a>
                        
                        <table class="table-data" border="1" width="100%" style="border-collapse: collapse; text-align: left;">
                            <thead>
                                <tr style="background-color: #f2f2f2;">
                                    <th width="5%" style="padding: 10px;">No</th>
                                    <th style="padding: 10px;">Nama Lengkap</th>
                                    <th style="padding: 10px;">Username</th>
                                    <th style="padding: 10px;">Status / Level</th>
                                    <th width="18%" style="padding: 10px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                if (mysqli_num_rows($ambil_data) > 0) {
                                    while($row = mysqli_fetch_assoc($ambil_data)) { 
                                ?>
                                <tr>
                                    <td style="padding: 10px;"><?= $no++; ?></td>
                                    <td style="padding: 10px;"><?= htmlspecialchars($row['nama_lengkap']); ?></td>
                                    <td style="padding: 10px;"><?= htmlspecialchars($row['username']); ?></td>
                                    <td style="padding: 10px;"><?= htmlspecialchars($row['level']); ?></td>
                                    <td style="padding: 10px;">
                                        <a href="edit-pengguna.php?id=<?= $row['id']; ?>" style="display: inline-block; padding: 5px 12px; background-color: #121F2D; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 13px; margin-right: 5px;">Edit</a>
                                        
                                        <a href="hapus-pengguna.php?id=<?= $row['id']; ?>" style="display: inline-block; padding: 5px 12px; background-color: #d9534f; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 13px;" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php 
                                    } 
                                } else { 
                                ?>
                                <tr>
                                    <td colspan="5" style="text-align: center; padding: 20px; color: #888;">Belum ada data pengguna.</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                     </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-box">
                <p>Copyright &copy; 2026 - ELITE VOCATION HIGH SCHOOL 1 South Jakarta</p>
            </div>
        </div>
    </body>
</html>