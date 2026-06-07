<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

// 1. OTOMATIS DETEKSI FILE KONEKSI
if (file_exists(__DIR__ . '/../koneksi.php')) {
    include __DIR__ . '/../koneksi.php';
} elseif (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "<script>alert('Peringatan: File koneksi.php tidak ditemukan!');</script>";
}

if (!isset($koneksi) && isset($conn)) {
    $koneksi = $conn;
}

// Ambil data ID pertama untuk acuan update
$cek_id = mysqli_query($koneksi, "SELECT id, foto_kepsek FROM pengaturan LIMIT 1");
$row_id = mysqli_fetch_array($cek_id);
$id_pengaturan = isset($row_id['id']) ? $row_id['id'] : 1;
$foto_lama     = isset($row_id['foto_kepsek']) ? $row_id['foto_kepsek'] : '';

// 2. PROSES UPDATE DATA KEPALA SEKOLAH
if (isset($_POST['submit'])) {
    $nama_kepsek = mysqli_real_escape_string($koneksi, $_POST['nama_kepsek']);
    $nip         = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $sambutan    = mysqli_real_escape_string($koneksi, $_POST['sambutan']);
    
    // Logika Upload Foto
    $filename = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    
    if ($filename != '') {
        $type1 = explode('.', $filename);
        $type2 = end($type1);
        $newname = 'kepsek' . time() . '.' . $type2;
        $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
        
        if (in_array(strtolower($type2), $tipe_diizinkan)) {
            if ($foto_lama != '' && file_exists('assets/' . $foto_lama)) {
                unlink('assets/' . $foto_lama);
            }
            move_uploaded_file($tmp_name, 'assets/' . $newname);
            $foto_final = $newname;
        } else {
            echo "<script>alert('Format file tidak diizinkan! Harus JPG/PNG.'); window.location='kepala-sekolah.php';</script>";
            exit();
        }
    } else {
        $foto_final = $foto_lama;
    }

    $update = mysqli_query($koneksi, "UPDATE pengaturan SET 
        nama_kepsek     = '$nama_kepsek', 
        nip             = '$nip', 
        sambutan_kepsek = '$sambutan', 
        foto_kepsek     = '$foto_final' 
        WHERE id        = '$id_pengaturan'");
    
    if ($update) {
        echo "<script>alert('Data Kepala Sekolah Berhasil Diperbarui!'); window.location='kepala-sekolah.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal: " . mysqli_error($koneksi) . "');</script>";
    }
}

// 3. AMBIL DATA TERBARU UNTUK FORM
$query = mysqli_query($koneksi, "SELECT * FROM pengaturan LIMIT 1");
$d = mysqli_fetch_array($query);

$nama_kepala     = isset($d['nama_kepsek']) ? $d['nama_kepsek'] : '';
$nip_kepala      = isset($d['nip']) ? $d['nip'] : '';
$sambutan_kepala = isset($d['sambutan_kepsek']) ? $d['sambutan_kepsek'] : '';
$foto_kepala     = isset($d['foto_kepsek']) ? $d['foto_kepsek'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Data Kepala Sekolah - Panel Admin</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=2.0">
    </head>
    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand"><span>ELITE</span> <span>VOCATION</span> <span>HIGH SCHOOL</span></div>
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
                    <li class="dropdown-wrapper"><a href="#">Akun ▾</a>
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
                    <div class="box-header">Pengaturan Data Kepala Sekolah</div>
                     <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Nama Kepala Sekolah</label>
                                <input type="text" name="nama_kepsek" value="<?php echo $nama_kepala; ?>" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;" required>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">NIP</label>
                                <input type="text" name="nip" value="<?php echo $nip_kepala; ?>" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;" required>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Sambutan Kepala Sekolah</label>
                                <textarea name="sambutan" rows="5" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px; resize:vertical;" required><?php echo $sambutan_kepala; ?></textarea>
                            </div>
                            <div style="margin-bottom: 15px;">
                                <label style="display:block; margin-bottom:5px; font-weight:bold;">Foto Kepala Sekolah</label>
                                <?php if ($foto_kepala != '' && file_exists('assets/' . $foto_kepala)): ?>
                                    <img src="assets/<?php echo $foto_kepala; ?>" style="max-width: 120px; display:block; margin-bottom:10px; border-radius:4px; border:1px solid #ddd;">
                                <?php endif; ?>
                                <input type="file" name="foto" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                                <small style="color: red;">*Kosongkan jika tidak ingin mengubah foto</small>
                            </div>
                            <button type="submit" name="submit" style="background:#007bff; color:white; border:none; padding:10px 15px; border-radius:4px; cursor:pointer;">Simpan Perubahan</button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
        <div class="footer"><div class="footer-box"><p>Copyright &copy; 2026 - ELITE VOCATION HIGH SCHOOL 1 South Jakarta</p></div></div>
    </body>
</html>