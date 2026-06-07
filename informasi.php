<?php
// OTOMATIS DETEKSI LOKASI FILE KONEKSI (AGAR TIDAK UNDEFINED VARIABLE)
if (file_exists(__DIR__ . '/../koneksi.php')) {
    include __DIR__ . '/../koneksi.php';
} elseif (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "<script>alert('Peringatan: File koneksi.php tidak ditemukan!');</script>";
}

session_start();

// AUTOMATIC SINKRONKAN JIKA VARIABEL DI KONEKSI.PHP PAKAI $conn
if (!isset($koneksi) && isset($conn)) {
    $koneksi = $conn;
}

// LOGIKA PROSES PENDAFTARAN (DIHALAMAN YANG SAMA AGAR TIDAK AMBLES 404)
if (isset($_POST['daftar'])) {
    if (!isset($koneksi) || $koneksi == null) {
        echo "<script>alert('Sistem tidak menemukan variabel koneksi database ($koneksi atau $conn). Periksa file koneksi.php Anda!');</script>";
    } else {
        $nama_siswa      = mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
        $asal_sekolah    = mysqli_real_escape_string($koneksi, $_POST['asal_sekolah']);
        $pilihan_jurusan = mysqli_real_escape_string($koneksi, $_POST['pilihan_jurusan']);
        $no_whatsapp     = mysqli_real_escape_string($koneksi, $_POST['no_whatsapp']);

        // Proses Simpan Data
        $query = mysqli_query($koneksi, "INSERT INTO pendaftaran (nama, asal_sekolah, jurusan, whatsapp) VALUES ('$nama_siswa', '$asal_sekolah', '$pilihan_jurusan', '$no_whatsapp')");

        if ($query) {
            header("Location: informasi.php?status=sukses");
            exit();
        } else {
            echo "<script>alert('Gagal simpan ke database! Detail Error: " . mysqli_escape_string($koneksi, mysqli_error($koneksi)) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi & Pendaftaran - ELITE VOCATION HIGH SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="./style.css?v=8.0">
</head>
<body>

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

    <div class="main-wrapper-box" style="margin-top: 90px !important;">
        <div class="white-card-panel">
            <div class="panel-title-main">Pusat Informasi & Formulir Pendaftaran PPDB Sekolah</div>
            
            <a href="index.php" class="btn-back-link">← Kembali ke Dashboard</a>

            <div class="cyber-box-inner">
                <div class="cyber-header">
                    <h2 style="font-size: 18px; margin: 0; color: #fff;">SCHOOL INFORMATION & ADMISSION</h2>
                    <span style="font-size: 12px; background: rgba(255,255,255,0.1); padding: 4px 10px; border-radius: 10px;">📢 TA 2026/2027</span>
                </div>

                <h3 style="font-size: 14px; margin-bottom: 10px; color: #f6c23e;">Pengumuman Penting</h3>
                
                <div class="sub-card-info">
                    <span class="badge-status">URGENT</span>
                    <span style="color: #00c6ff; font-size: 11px; font-weight: bold;">📅 25 Mei 2026</span>
                    <h4 style="margin: 5px 0; color: #fff; font-size: 15px;">Pelaksanaan Asesmen Akhir Semester (AAS) Genap Digital</h4>
                    <p style="margin: 0; font-size: 12px; color: #a4b8cc; line-height: 1.4;">Diberitahukan kepada seluruh siswa/i bahwa AAS Genap akan dilaksanakan berbasis siber via smartphone.</p>
                    
                    <a href="#popup-baca" class="btn-action-trigger">Baca Selengkapnya</a>
                </div>

                <div class="grid-dua-kolom">
                    
                    <div>
                        <h3 style="font-size: 14px; margin-bottom: 10px; color: #f6c23e;">Informasi Kuota Gelombang</h3>
                        <div class="sub-card-info" style="margin-bottom: 15px;">
                            <span style="color: #00c6ff; font-size: 11px; font-weight: bold;">📅 PPDB Gel-2</span>
                            <h4 style="margin: 5px 0; font-size: 13px; color: #fff;">Penerimaan Calon Siswa Baru</h4>
                            <p style="margin: 0; font-size: 11.5px; color: #a4b8cc;">Kuota tersisa dikit untuk kompetensi keahlian DKV, Farmasi, Arsitektur, Tata boga, Pariwista, Akuntansi, Penerbangan, Ketarunaan.</p>
                        </div>
                        
                        <div class="sub-card-info">
                            <span style="color: #ff7a00; font-size: 11px; font-weight: bold;">📅 Agenda Terdekat</span>
                            <h4 style="margin: 5px 0; font-size: 13px; color: #fff;">02 Juni - Rapat Pleno Kelulusan</h4>
                            <p style="margin: 0; font-size: 11.5px; color: #a4b8cc;">Jam 08:00 WIB s/d Selesai di Aula Utama.</p>
                        </div>
                    </div>

                    <div class="form-container-cyber">
                        <h3 style="font-size: 14px; margin-bottom: 12px; color: #00c6ff; border-left: 3px solid #00c6ff; padding-left: 6px;">Form Registrasi PPDB</h3>
                        
                        <?php if(isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
                            <div class="alert-sukses-kirim">
                                👍 Berkas Berhasil Dikirim ke Sistem!
                            </div>
                        <?php endif; ?>

                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nama Lengkap Calon Siswa</label>
                                <input type="text" name="nama_siswa" placeholder="Sesuai ijazah..." required>
                            </div>
                            <div class="form-group">
                                <label>Asal Sekolah (SMP/MTs)</label>
                                <input type="text" name="asal_sekolah" placeholder="Example: SMPN 1 Jakarta" required>
                            </div>
                            <div class="form-group">
                                <label>Pilihan Kompetensi Jurusan</label>
                                <select name="pilihan_jurusan" required>
                                    <option value="" disabled selected>-- Pilih Jurusan --</option>
                                    <option value="DKV">Desain Komunikasi Visual (DKV)</option>
                                    <option value="Farmasi">Farmasi Klinis</option>
                                    <option value="Arsitektur">Arsitektur</option>
                                    <option value="Kuliner">Kuliner / Tata Boga</option>
                                    <option value="Kuliner">Penerbangan</option>
                                    <option value="Kuliner">Akuntansi</option>
                                    <option value="Kuliner">Ketarunaan</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nomor WhatsApp Aktif</label>
                                <input type="tel" name="no_whatsapp" placeholder="------" required>
                            </div>
                            <button type="submit" name="daftar" class="btn-submit-form">Kirim Berkas Pendaftaran 🚀</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div id="popup-baca" class="modal-overlay-view">
        <div class="modal-body-card">
            <a href="#" class="close-modal-btn">✕</a>
            <span style="color: #00c6ff; font-size: 11px; font-weight: bold;">PENGUMUMAN DETAIL</span>
            <h3 style="margin: 10px 0; color: #fff;">Asesmen Akhir Semester Digital</h3>
            <p style="font-size: 13px; color: #dddfeb; line-height: 1.5;">
                Ujian AAS Genap Tahun Ajaran 2025/2026 akan dilaksanakan secara penuh menggunakan aplikasi ujian siber sekolah. <br><br>
                <strong>Aturan Ujian:</strong><br>
                1. Wajib membawa Smartphone baterai penuh.<br>
                2. Kuota internet disediakan via Wi-Fi kelas.<br>
                3. Hadir tepat waktu sesuai jadwal pendaftaran.
            </p>
        </div>
    </div>

</body>
</html>