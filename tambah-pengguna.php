<?php
include '../koneksi.php';
session_start();

// Cek otomatis nama variabel koneksi
if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}

// Jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    // Trik melacak apakah data masuk ke PHP atau tidak
    echo "<center><h2>Sedang memproses data... Harap tunggu.</h2></center>";

    if (!$conn) {
        die("Koneksi ke database gagal total: " . mysqli_connect_error());
    }

    $nama     = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $user     = mysqli_real_escape_string($conn, $_POST['username']);
    $level    = mysqli_real_escape_string($conn, $_POST['level']);
    $password = '123456'; 

    $query = "INSERT INTO pengguna (nama_lengkap, username, password, level) VALUES ('$nama', '$user', '$password', '$level')";
    $eksekusi = mysqli_query($conn, $query);
    
    if ($eksekusi) {
        echo "<script>
                alert('Data Pengguna Berhasil Disimpan!');
                window.location.href='pengguna.php';
              </script>";
        exit();
    } else {
        $err = mysqli_error($conn);
        echo "<script>
                alert('Gagal Simpan! Kata MySQL: $err');
                window.history.back();
              </script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna - ELITE VOCATION HIGH SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=9.2">
    <link rel="stylesheet" type="text/css" href="style-form.css?v=2.0">
</head>
<body class="bg-light">
    <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important;">
        <div class="container">
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
                <li><a href="total-jurusan.php">Jurusan</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
             </ul>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="box">
                 <div class="box-header">Tambah Pengguna Baru</div>
                 <div class="box-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group">
                            <label>Level Akses:</label>
                            <select name="level" class="form-control" required>
                                <option value="">-- Pilih Level --</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option> 
                                <option value="Admin">Petugas</option> 
                                <option value="Admin">Staf Akademik</option> 
                                <option value="Admin">Siswa</option> 
                             </select>
                        </div>
                        <div style="margin-top: 25px;">
                            <button type="submit" name="simpan" class="btn-submit" style="cursor: pointer;">Simpan Data</button>
                            <a href="pengguna.php" style="margin-left:15px; color:#555; text-decoration:none; font-weight:bold;">Batal</a>
                        </div>
                    </form>
                 </div> 
            </div> 
        </div> 
    </div> 
</body>
</html>