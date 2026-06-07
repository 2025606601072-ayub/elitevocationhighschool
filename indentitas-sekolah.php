<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

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

// AMBIL ID SECARA DINAMIS (Anti salah ID)
$cek_id = mysqli_query($koneksi, "SELECT id FROM pengaturan LIMIT 1");
$row_id = mysqli_fetch_array($cek_id);
// Jika tidak ada data sama sekali, kita buat default id = 1
$id_pengaturan = isset($row_id['id']) ? $row_id['id'] : 1; 

// PROSES SIMPAN DATA (UPDATE)
if (isset($_POST['submit'])) {
    $nama             = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $npsn             = mysqli_real_escape_string($koneksi, $_POST['npsn']);
    $status_sekolah   = mysqli_real_escape_string($koneksi, $_POST['status_sekolah']);
    $akreditasi       = mysqli_real_escape_string($koneksi, $_POST['akreditasi']);
    $alamat           = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $telepon          = mysqli_real_escape_string($koneksi, $_POST['telepon']);
    $email            = mysqli_real_escape_string($koneksi, $_POST['email']);
    $situs_web        = mysqli_real_escape_string($koneksi, $_POST['situs_web']);
    $tahun_berdiri    = mysqli_real_escape_string($koneksi, $_POST['tahun_berdiri']);
    $kurikulum        = mysqli_real_escape_string($koneksi, $_POST['kurikulum']);
    $motto            = mysqli_real_escape_string($koneksi, $_POST['motto']);
    $jam_operasional  = mysqli_real_escape_string($koneksi, $_POST['jam_operasional']);
    $tipe_sekolah     = mysqli_real_escape_string($koneksi, $_POST['tipe_sekolah']);
    $luas_sekolah     = mysqli_real_escape_string($koneksi, $_POST['luas_sekolah']);
    $bahasa           = mysqli_real_escape_string($koneksi, $_POST['bahasa_pengantar']);
    
    // Perintah SQL Update
    $query_update = "UPDATE pengaturan SET 
        nama             = '$nama', 
        npsn             = '$npsn', 
        status_sekolah   = '$status_sekolah', 
        akreditasi       = '$akreditasi', 
        alamat           = '$alamat',
        telepon          = '$telepon',
        email            = '$email',
        situs_web        = '$situs_web',
        tahun_berdiri    = '$tahun_berdiri',
        kurikulum        = '$kurikulum',
        motto            = '$motto',
        jam_operasional  = '$jam_operasional',
        tipe_sekolah     = '$tipe_sekolah',
        luas_sekolah     = '$luas_sekolah',
        bahasa_pengantar = '$bahasa'
        WHERE id         = '$id_pengaturan'";
    
    $update = mysqli_query($koneksi, $query_update);
    
    if ($update) {
        echo "<script>alert('Identitas EVHS Berhasil Diperbarui!'); window.location='indentitas-sekolah.php';</script>";
        exit();
    } else {
        // JIKA GAGAL, AKAN MUNCUL POP-UP ERROR DATABASE DISINI
        echo "<script>alert('GAGAL MENYIMPAN! Error Database: " . mysqli_escape_string($koneksi, mysqli_error($koneksi)) . "');</script>";
    }
}

// PROSES AMBIL DATA UNTUK DITAMPILKAN DI FORM
$query = mysqli_query($koneksi, "SELECT * FROM pengaturan LIMIT 1");
$d = mysqli_fetch_array($query);

$nama_sekolah   = isset($d['nama']) ? $d['nama'] : '';
$npsn_sekolah   = isset($d['npsn']) ? $d['npsn'] : ''; 
$status_sekolah = isset($d['status_sekolah']) ? $d['status_sekolah'] : ''; 
$akreditasi     = isset($d['akreditasi']) ? $d['akreditasi'] : ''; 
$alamat_sekolah = isset($d['alamat']) ? $d['alamat'] : '';
$telepon_sekolah= isset($d['telepon']) ? $d['telepon'] : '';
$email_sekolah  = isset($d['email']) ? $d['email'] : '';
$web_sekolah    = isset($d['situs_web']) ? $d['situs_web'] : '';
$tahun_berdiri  = isset($d['tahun_berdiri']) ? $d['tahun_berdiri'] : '';
$kurikulum      = isset($d['kurikulum']) ? $d['kurikulum'] : '';
$motto          = isset($d['motto']) ? $d['motto'] : '';
$jam_ops        = isset($d['jam_operasional']) ? $d['jam_operasional'] : '';
$tipe_sek       = isset($d['tipe_sekolah']) ? $d['tipe_sekolah'] : '';
$luas_sekolah   = isset($d['luas_sekolah']) ? $d['luas_sekolah'] : '';
$bahasa_pngntr  = isset($d['bahasa_pengantar']) ? $d['bahasa_pengantar'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Identitas EVHS - Panel Admin</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=2.0">
    </head>

    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand"><span>ELITE</span> <span>VOCATION</span> <span>HIGH SCHOOL</span><span>精英职业高级中学</span></div>
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

        <div class="content" style="padding-top: 100px; padding-bottom: 20px;">
            <div class="container">
                <div class="box">
                    <div class="box-header">Pengaturan Eksklusif Identitas EVHS</div>
                     <div class="box-body">
                        
                        <form action="" method="POST">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label>Nama Sekolah Resmi</label>
                                <input type="text" name="nama" value="<?php echo $nama_sekolah; ?>" placeholder="Contoh: ELITE VOCATIONAL HIGH SCHOOL ( EVHS )" required>
                            </div>

                            <div class="grid-container">
                                <div class="form-group">
                                    <label>NPSN</label>
                                    <input type="text" name="npsn" value="<?php echo $npsn_sekolah; ?>" placeholder="69987654" required>
                                </div>
                                <div class="form-group">
                                    <label>School Status (Status Sekolah)</label>
                                    <input type="text" name="status_sekolah" value="<?php echo $status_sekolah; ?>" placeholder="Private Vocational High School" required>
                                </div>
                                <div class="form-group">
                                    <label>Accreditation (Akreditasi)</label>
                                    <input type="text" name="akreditasi" value="<?php echo $akreditasi; ?>" placeholder="A (Excellent)" required>
                                </div>
                            </div>

                            <div class="grid-container">
                                <div class="form-group">
                                    <label>Established (Tahun Berdiri)</label>
                                    <input type="text" name="tahun_berdiri" value="<?php echo $tahun_berdiri; ?>" placeholder="1990" required>
                                </div>
                                <div class="form-group">
                                    <label>Curriculum (Kurikulum)</label>
                                    <input type="text" name="kurikulum" value="<?php echo $kurikulum; ?>" placeholder="National Curriculum & International Program" required>
                                </div>
                                <div class="form-group">
                                    <label>School Motto (Slogan)</label>
                                    <input type="text" name="motto" value="<?php echo $motto; ?>" placeholder="Inspire • Innovate • Excel" required>
                                </div>
                            </div>

                            <div class="grid-container">
                                <div class="form-group">
                                    <label>School Type (Tipe Sekolah)</label>
                                    <input type="text" name="tipe_sekolah" value="<?php echo $tipe_sek; ?>" placeholder="International Vocational Boarding School" required>
                                </div>
                                <div class="form-group">
                                    <label>School Area (Luas Sekolah)</label>
                                    <input type="text" name="luas_sekolah" value="<?php echo $luas_sekolah; ?>" placeholder="25 Hectares" required>
                                </div>
                                <div class="form-group">
                                    <label>Language of Instruction (Pengantar)</label>
                                    <input type="text" name="bahasa_pengantar" value="<?php echo $bahasa_pngntr; ?>" placeholder="English & Indonesian" required>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 15px;">
                                <label>Address (Alamat Lengkap)</label>
                                <textarea name="alamat" rows="2" placeholder="Jl. Global Education Avenue No. 1, South Jakarta 12430..." required><?php echo $alamat_sekolah; ?></textarea>
                            </div>

                            <div class="grid-container">
                                <div class="form-group">
                                    <label>Phone (No. Telepon)</label>
                                    <input type="text" name="telepon" value="<?php echo $telepon_sekolah; ?>" placeholder="(+62) 21-5555-8899" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Resmi</label>
                                    <input type="email" name="email" value="<?php echo $email_sekolah; ?>" placeholder="info@evhs.sch.id" required>
                                </div>
                                <div class="form-group">
                                    <label>Website URL</label>
                                    <input type="text" name="situs_web" value="<?php echo $web_sekolah; ?>" placeholder="www.evhs.sch.id" required>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label>Operating Hours (Jam Kerja / Operasional)</label>
                                <input type="text" name="jam_operasional" value="<?php echo $jam_ops; ?>" placeholder="Monday – Friday (07.00 AM – 04.00 PM)" required>
                            </div>

                            <button type="submit" name="submit" style="background:#0f2038; color:white; border:none; padding:12px 20px; border-radius:4px; cursor:pointer; font-size:15px; font-weight:bold;">Simpan Spesifikasi Sekolah</button>
                        </form>

                     </div>
                </div>
            </div>
        </div>

        <div class="footer"><div class="footer-box"><p>Copyright &copy; 2026 - ELITE VOCATION HIGH SCHOOL 1 South Jakarta</p></div></div>
    </body>
</html>