<?php
include '../koneksi.php';
session_start();

// Catatan: Proteksi login sementara dimatikan agar tidak error 404.
// Jika nanti sudah ada file login, kamu bisa aktifkan lagi.

$error_message = "";
$success_message = "";

if (isset($_POST['submit'])) {
    $password_lama = mysqli_real_escape_string($conn, $_POST['password_lama']);
    $password_baru = mysqli_real_escape_string($conn, $_POST['password_baru']);
    $konfirmasi_baru = mysqli_real_escape_string($conn, $_POST['konfirmasi_baru']);
    
    // Menggunakan ID user statis (contoh: id 1) untuk simulasi jika session belum ada
    $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : 1; 

    // 1. Ambil password lama dari database
    // SESUAIKAN: 'pengguna', 'id_pengguna', dan 'password' dengan tabel databasemu
    $query = mysqli_query($conn, "SELECT password FROM pengguna WHERE id_pengguna = '$user_id'");
    $data  = mysqli_fetch_assoc($query);

    if ($data) {
        // 2. Cek apakah password lama yang diinput sesuai dengan di database
        if ($password_lama !== $data['password']) {
            $error_message = "Password lama salah!";
        } 
        // 3. Cek apakah password baru dan konfirmasinya cocok
        elseif ($password_baru !== $konfirmasi_baru) {
            $error_message = "Konfirmasi password baru tidak cocok!";
        } 
        else {
            // 4. Update password baru ke database
            $update = mysqli_query($conn, "UPDATE pengguna SET password = '$password_baru' WHERE id_pengguna = '$user_id'");

            if ($update) {
                $success_message = "Password berhasil diperbarui!";
            } else {
                $error_message = "Gagal memperbarui password. Silakan coba lagi.";
            }
        }
    } else {
        $error_message = "User dengan ID tersebut tidak ditemukan di database.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Ubah Password - ELITE VOCATION HIGH SCHOOL</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=10.2">
    </head>

    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand">
                        <span>ELITE</span>
                        <span>VOCATION</span>
                        <span>HIGH SCHOOL</span>
                    </div>
                 </div>

                 <ul class="nav-menu">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="pengguna.php">Pengguna</a></li>
                    <li><a href="total-jurusan.php">Jurusan</a></li>
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

        <div class="content">
            <div class="container">
                <div class="box">
                     <div class="box-header">
                        Ubah Password
                     </div>
                     <div class="box-body">
                        
                        <?php if ($error_message !== ""): ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php endif; ?>

                        <?php if ($success_message !== ""): ?>
                            <div class="alert alert-success"><?php echo $success_message; ?></div>
                        <?php endif; ?>

                        <form action="" method="POST" class="form-ubah-password">
                            <div class="form-group">
                                <label>Password Lama</label>
                                <input type="password" name="password_lama" class="form-control" placeholder="Masukkan password lama Anda" required>
                            </div>

                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="password_baru" class="form-control" placeholder="Masukkan password baru" required>
                            </div>

                            <div class="form-group">
                                <label>Konfirmasi Password Baru</label>
                                <input type="password" name="konfirmasi_baru" class="form-control" placeholder="Ulangi password baru" required>
                            </div>

                            <button type="submit" name="submit" class="btn-submit">Simpan Perubahan</button>
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