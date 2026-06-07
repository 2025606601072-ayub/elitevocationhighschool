<?php
session_start();
// Jika belum login, tendang ke halaman login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

// 1. OTOMATIS DETEKSI LOKASI FILE KONEKSI
if (file_exists(__DIR__ . '/../koneksi.php')) {
    include __DIR__ . '/../koneksi.php';
} elseif (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "<script>alert('Peringatan: File koneksi.php tidak ditemukan!');</script>";
}

// SINKRONKAN VARIABEL KONEKSI
if (!isset($koneksi) && isset($conn)) {
    $koneksi = $conn;
}

// 2. LOGIKA PROSES SIMPAN PERUBAHAN DATA
if (isset($_POST['submit'])) {
    $sejarah = mysqli_real_escape_string($koneksi, $_POST['sejarah']);
    $visi    = mysqli_real_escape_string($koneksi, $_POST['visi']);
    $misi    = mysqli_real_escape_string($koneksi, $_POST['misi']);
    
    // Ambil ID data pertama untuk kondisi WHERE
    $cek_id = mysqli_query($koneksi, "SELECT id FROM pengaturan LIMIT 1");
    $row_id = mysqli_fetch_array($cek_id);
    $id_pengaturan = isset($row_id['id']) ? $row_id['id'] : 1;

    // PERBAIKAN DI SINI: Nama kolom disesuaikan dengan huruf kapital database (Sejarah, Visi, Misi)
    $update = mysqli_query($koneksi, "UPDATE pengaturan SET Sejarah = '$sejarah', Visi = '$visi', Misi = '$misi' WHERE id = '$id_pengaturan'");
    
    if ($update) {
        echo "<script>alert('Data Tentang Sekolah Berhasil Diperbarui!'); window.location='tentang-sekolah.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal Memperbarui Data: " . mysqli_error($koneksi) . "');</script>";
    }
}

// 3. PROSES AMBIL DATA TERBARU DARI DATABASE
$query = mysqli_query($koneksi, "SELECT * FROM pengaturan LIMIT 1");
$d = mysqli_fetch_array($query);

// PERBAIKAN DI SINI: Memanggil array menggunakan huruf kapital sesuai nama kolom database
$sejarah_sekolah = isset($d['Sejarah']) ? $d['Sejarah'] : '';
$visi_sekolah    = isset($d['Visi']) ? $d['Visi'] : '';
$misi_sekolah    = isset($d['Misi']) ? $d['Misi'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Tentang Sekolah - Panel Admin</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=2.0">
    </head>

    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px; box-sizing: border-box;">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand">
                        <span>ELITE</span>
                        <span>VOCATION</span>
                        <span>HIGH SCHOOL</span>
                        <span>精英职业高级中学</span>
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
                            <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
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

        <div class="content" style="padding-top: 100px;">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Pengaturan Tentang Sekolah
                    </div>
                     <div class="box-body">
                        
                        <form action="" method="POST">
                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Sejarah Singkat Sekolah</label>
                                <textarea name="sejarah" rows="5" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px; resize:vertical;" required><?php echo $sejarah_sekolah; ?></textarea>
                            </div>

                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Visi</label>
                                <textarea name="visi" rows="3" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px; resize:vertical;" required><?php echo $visi_sekolah; ?></textarea>
                            </div>

                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Misi</label>
                                <textarea name="misi" rows="5" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px; resize:vertical;" required><?php echo $misi_sekolah; ?></textarea>
                            </div>

                            <button type="submit" name="submit" style="background:#007bff; color:white; border:none; padding:10px 15px; border-radius:4px; cursor:pointer;">Simpan Perubahan</button>
                        </form>

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