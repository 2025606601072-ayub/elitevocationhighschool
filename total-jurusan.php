<?php
   session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Detail Kompetensi Keahlian - ELITE VOCATION HIGH SCHOOL</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=10.0">
      <link rel="stylesheet" type="text/css" href="style-total-jurusan.css?v=10.0">
    </head>

    <body class="bg-light">
        <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand">
                        ELITE<br>VOCATION<br>HIGH SCHOOL<br>精英职业高级中学
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
                        Data Kompetensi Keahlian (Total Jurusan)
                     </div>
                     <div class="box-body">
                        
                        <h2 class="halaman-jurusan-title">Daftar Jurusan Aktif</h2>
                        <p class="halaman-jurusan-subtitle">Berikut adalah detail kompetensi keahlian yang tersedia di ELITE VOCATION HIGH SCHOOL:</p>
                        
                        <div class="grid-halaman-jurusan">
                            
                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/foto dkv.png" alt="DKV" onerror="this.src='https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Desain Komunikasi Visual (DKV)</h3>
                                    <p>Developing digital creativity through illustration, filmmaking, photography, and videography based on modern technology and global industry standards to create innovative, professional, and internationally competitive works.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/seragam farmasi 2.png" alt="Farmasi" onerror="this.src='https://images.unsplash.com/photo-1587854692152-cbe660db0969?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Farmasi Klinis</h3>
                                    <p>Learning pharmaceutical theory, medical chemical prescription compounding, and pharmaceutical laboratory management skills.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/foto arsitektur.png" alt="Arsitektur" onerror="this.src='https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Arsitekstur</h3>
                                    <p>Focusing on architectural building structure design, physical model making, and advanced 3D CAD modeling to develop creative, innovative, and industry-ready architectural planning skills.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/foto tata boga.png" alt="Tata Boga" onerror="this.src='https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Kuliner / Tata Boga</h3>
                                    <p>Mastering the art of Indonesian and international culinary processing, pastry and bakery skills, as well as professional restaurant management to create high-quality and globally competitive culinary experiences.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/pramugari 2.png" alt="Pariwisata" onerror="this.src='https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Penerbangan</h3>
                                    <p>Mastering flight attendant professionalism, hospitality services, public communication, grooming, and aviation service skills based on international airline standards.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/foto akutansi.png" alt="Akuntansi" onerror="this.src='https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Akuntansi</h3>
                                    <p>Mastering accounting, financial reporting, taxation, and business management skills supported by modern technology and professional industry standards.</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/foto pariwisata.png" alt="Pariwisata" onerror="this.src='https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Pariwisata</h3>
                                    <p>Developing professional expertise in tourism, hospitality services, travel management, and cultural promotion based on international standards and excellent customer service..</p>
                                </div>
                            </div>

                            <div class="kartu-jurusan-neon">
                                <div class="wrapper-foto">
                                    <img src="assets/ketarunaan.png" alt="Pariwisata" onerror="this.src='https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=400'">
                                </div>
                                <div class="detail-teks-jurusan">
                                    <h3>Ketarunaan</h3>
                                    <p>The program emphasizes integrity, professionalism, respect, and self-discipline while fostering a spirit of service and excellence. Students are encouraged to build strong leadership skills, effective communication abilities, and a commitment to achieving both personal and academic success. Through various training activities and character-building programs, cadets develop the mindset and competencies needed to excel in higher education, professional careers, and future leadership roles.</p>
                                </div>
                            </div>

                        </div> <div style="margin-top: 30px;">
                            <a href="index.php" class="tombol-kembali">← Back To Dashboard</a>
                        </div>

                     </div> </div> </div> </div> <div class="footer">
            <div class="footer-box">
                <p>Copyright &copy; 2026 - ELITE VOCATION HIGH SCHOOL 1 South Jakarta</p>
            </div>
        </div>
    </body>
</html>