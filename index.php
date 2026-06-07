<?php
include '../koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Panel Admin - ELITE VOCATION HIGH SCHOOL</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=9.2">
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

        <div class="content">
            <div class="container">
                <div class="box">
                     <div class="box-header">
                        Dashboard
                     </div>
                     <div class="box-body">
                        <h2 class="dashboard-title">
                                Welcome to ELITE VOCATION HIGH SCHOOL
                        </h2>
                        <p class="dashboard-subtitle">Berikut adalah ringkasan data sistem informasi sekolah saat ini:</p>
                        
                        <div class="dashboard-cards">
                            <div class="card-box card-pengguna">
                                <h4>USER</h4>
                                <p>5</p>
                                <a href="pengguna.php" class="card-link">Lihat Detail →</a>
                            </div>

                            <div class="card-box card-jurusan">
                                <h4>SCHOOL DEPARTEMENTS</h4>
                                <p>4</p>
                                <a href="total-jurusan.php" class="card-link">Lihat Detail →</a>
                            </div>

                            <div class="card-box card-galeri">
                                <h4>SCHOOL GALLERY</h4>
                                <p>12</p>
                                <a href="galeri.php" class="card-link">Lihat Detail →</a>
                            </div>

                            <div class="card-box card-informasi">
                                <h4>SCHOOL INFORMATION</h4>
                                <p>8</p>
                                <a href="informasi.php" class="card-link">Lihat Detail →</a>
                            </div>
                        </div>

                        <p class="dashboard-footer-text">Akses cepat manajemen data dan pengaturan sistem informasi sekolah:</p>

                        <div class="area-dashboard-baru">
                            <div class="baris-baru">
                                <div class="kotak-kartu efek-cahaya">
                                    <div class="judul-kartu"><h3>Admin Activity Log</h3></div>
                                    <div class="isi-kartu">
                                        <ul class="activity-list">
                                            <li><strong>Ayub Miftahul Ikhsan</strong> - Update Data Jurusan <span class="time">10 min ago</span></li>
                                            <li><strong>Anjani Mufaidah</strong> - Tambah Pengguna <span class="time">30 min ago</span></li>
                                            <li><strong>MeiRiska Nosa Tiara .Y</strong> - Backup Berhasil <span class="time">1 hour ago</span></li>
                                            <li><strong>Zahra Naila F</strong> - Mengubah hak akses akunl <span class="time">5 hour ago</span></li>
                                            <li><strong>Irfan Rahmatulloh</strong> - Mereset password akun <span class="time">10 hour ago</span></li>
                                            <li><strong>Muhammad Alfa Ridho</strong> - Memperbarui jadwal pelajaran kelas <span class="time">8 hour ago</span></li>
                                            <li><strong>Ali Mate Ali Z</strong> - Menghapus akun pengguna <span class="time">30 hour ago</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="kotak-kartu efek-cahaya">
                                    <div class="judul-kartu"><h3>Statistik Pendaftar</h3></div>
                                    <div class="isi-kartu">
                                        <div class="chart-placeholder">
                                            <div class="bar bar-1" style="height: 80px;"><span>Akuntansi</span></div>
                                            <div class="bar bar-2" style="height: 50px;"><span>DKV</span></div>
                                            <div class="bar bar-3" style="height: 65px;"><span>Pariwisata</span></div>
                                            <div class="bar bar-3" style="height: 50px;"><span>Farmasi</span></div>
                                            <div class="bar bar-3" style="height: 90px;"><span>Arsitekstur</span></div>
                                            <div class="bar bar-3" style="height: 100px;"><span>Penerbangan</span></div>
                                            <div class="bar bar-3" style="height: 100px;"><span>Ketarunaan</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="baris-baru">
                                <div class="kotak-kartu efek-cahaya">
                                    <div class="judul-kartu"><h3>Kalender Akademik</h3></div>
                                    <div class="isi-kartu">
                                        <div class="mini-calendar">
                                            <div class="cal-day header">Minggu</div><div class="cal-day header">Senin</div><div class="cal-day header">Selasa</div><div class="cal-day header">Rabu</div>
                                            <div class="cal-day">1</div><div class="cal-day event-pts">2</div><div class="cal-day event-pts">3</div><div class="cal-day">4</div>
                                            <div class="cal-day">8</div><div class="cal-day">9</div><div class="cal-day event-praktik">10</div><div class="cal-day">11</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kotak-kartu efek-cahaya">
                                    <div class="judul-kartu"><h3>Jadwal Mendatang</h3></div>
                                    <div class="isi-kartu">
                                        <ul class="schedule-list">
                                            <li><span class="date">20 April</span> Penyerahan Rapor</li>
                                            <li><span class="date">22 Mei</span> Pameran Karya Siswa</li>
                                            <li><span class="date">2 Juni</span> Pemberitahaun UAS</li>
                                            <li><span class="date">9 Juni</span> Pemberitahuan Libur</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="dashboard-footer-text" style="margin-top: 40px;">Eksplorasi Profil, Fasilitas, dan Prestasi Sekolah:</p>
                        
                        <div class="area-profil-sekolah">
                            <div class="baris-profil">
                                <div class="kartu-profil efek-kilat">
                                    <div class="wrapper-foto">
                                        <img src="assets/foto 6.png" alt="Gedung Sekolah" onerror="this.src='https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=500'">
                                    </div>
                                    <div class="info-profil">
                                        <h3>Infrastruktur</h3>
                                        <p>Modern vocational school buildings equipped with smart classrooms and industry-standard practice laboratories, designed to enhance students’ technical skills, creativity, and innovation. The school provides a professional learning environment supported by advanced technology, modern workshop facilities, and hands-on industry-based training programs to prepare students for global competition and future careers.</p>
                                        <p>Gedung sekolah kejuruan modern yang dilengkapi dengan ruang kelas pintar dan laboratorium praktik berstandar industri, dirancang untuk meningkatkan keterampilan teknis, kreativitas, dan inovasi siswa. Sekolah ini menyediakan lingkungan pembelajaran profesional yang didukung oleh teknologi canggih, fasilitas bengkel modern, dan program pelatihan berbasis industri langsung untuk mempersiapkan siswa menghadapi persaingan global dan karier masa depan. Siswa juga didorong untuk mengembangkan keterampilan kepemimpinan, kolaborasi, dan pemecahan masalah melalui berbagai pengalaman pembelajaran akademis dan praktis.</p>
                                    </div>
                                </div>

                                <div class="kartu-profil efek-kilat">
                                    <div class="wrapper-foto">
                                        <img src="assets/foto 5.png" alt="Seragam Sekolah" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                    </div>
                                    <div class="info-profil">
                                        <h3>Identitas & Seragam</h3>
                                        <p>Menunjukkan kedisiplinan dan profesionalisme yang tinggi melalui atribut resmi seragam kesiswaan, yang mencerminkan nilai tanggung jawab, integritas, dan jiwa kepemimpinan. Para siswa dilatih untuk memiliki karakter unggul, kemampuan kerja sama tim, serta sikap profesional dalam kegiatan akademik maupun organisasi, sehingga menciptakan lingkungan sekolah yang positif, inspiratif, dan berorientasi pada prestasi. Demonstrates a high level of discipline and professionalism through the official student uniform, reflecting the values of responsibility, integrity, and leadership. Students are trained to develop outstanding character, strong teamwork skills, and a professional attitude in both academic and organizational activities, creating a positive, inspiring, and achievement-oriented school environment. This culture of excellence encourages students to become confident, adaptable, and globally competitive individuals who are prepared to face future challenges, contribute meaningfully to society, and excel in their chosen fields of study and careers.</p>
                                    </div>
                                </div>

                                <div class="kartu-profil kartu-prestasi-banyak">
                                    <div class="info-profil-atas">
                                        <h3>Siswa Berprestasi</h3>
                                        <p>Apresiasi kepada talenta muda pemenang kompetisi:</p>
                                    </div>
                                    
                                    <div class="grid-siswa-prestasi">
                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/foto 1.png" alt="Evelyn" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Evelyn Tan</h4>
                                                <p>Kompetisi Dkv Internasional</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/foto 2.png" alt="Clarissa" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Clarissa Wijaya</h4>
                                                <p>National Pharmacy Competition</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/foto 3.png" alt="Kevin" onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Kevin Harton</h4>
                                                <p>International Mathematics Olympiad</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/org pinter 4.png" alt="Kevin" onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Joyline </h4>
                                                <p>International Mathematics Olympiad</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/org pinter 1.png" alt="Kevin" onerror="this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Angelica</h4>
                                                <p>Global Debate Championship</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/foto 4.png" alt="Matthew" onerror="this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Matthew Lee</h4>
                                                <p>National Architecture Competition</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/org pinter 2.png" alt="Matthew" onerror="this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Jinju Azzahrah</h4>
                                                <p>International Business Case Competition</p>
                                            </div>
                                        </div>

                                        <div class="item-prestasi efek-kilat">
                                            <div class="foto-siswa">
                                                <img src="assets/org pinter 3.png" alt="Matthew" onerror="this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200'">
                                            </div>
                                            <div class="detail-siswa">
                                                <h4>Lionel Abrahah</h4>
                                                <p>International Young Scientists Competition</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

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