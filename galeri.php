<?php
include '../koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Galeri Kegiatan - ELITE VOCATION HIGH SCHOOL</title>
      <link rel="stylesheet" type="text/css" href="style.css?v=7.0">
    </head>

    <body class="bg-light">
         <div class="navbar" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 9999 !important; background-color: #121F2D !important; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
            <div class="container">
                 <div class="nav-brand-container">
                     <img src="assets/logo sekolah.png" alt="Logo" class="nav-brand-logo"> 
                     <div class="nav-brand">
                        ELITE<br>VOCATION<br>HIGH SCHOOL<br>
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
                        SCHOOL GALLERY EVHS
                     </div>
                     <div class="box-body">
                        
                        <h2 class="galeri-title">SCHOOL DOCUMENTATION GALLERY</h2>
                        <p class="galeri-subtitle">Eksplore all the activities , infrastructure , and gold achievements in ELITE VOCATION HIGH SCHOOL:</p>
                        
                        <div class="filter-galeri-wrapper">
                            <button class="btn-filter aktif" onclick="filterGaleri('semua')">All picture</button>
                            <button class="btn-filter" onclick="filterGaleri('praktik')">Learning by Doing</button>
                            <button class="btn-filter" onclick="filterGaleri('fasilitas')">Facilities</button>
                            <button class="btn-filter" onclick="filterGaleri('ekskul')">Extracurricular Activities</button>
                            <button class="btn-filter" onclick="filterGaleri('event')">Event</button>
                            <button class="btn-filter" onclick="filterGaleri('prestasi')">Achievement</button>
                        </div>
                        
                        <div class="grid-total-galeri">
                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kegiatan sofware.png" alt="Praktik Lab" onerror="this.src='https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>Software Engineering Session</h3>
                                    <p>"System Architecture" dan "Robust Software Systems" yang menunjukkan bahwa siswa tidak cuma belajar coding dasar (seperti membuat web HTML biasa), melainkan belajar cara merancang sistem teknologi yang rumit dan kuat standar industri ,Fokus pada "Algorithm Optimization" (Optimasi Algoritma) yang memberikan kesan akademis dan intelek tinggi</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kegiatan fine art.png" alt="Kunjungan Industri" onerror="this.src='https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>Fine Art</h3>
                                    <p>Live Model Sculpting & Painting: Bukan meniru dari foto, siswa langsung melukis atau membuat patung dari model manusia/objek nyata yang ada di depan mereka secara langsung , Gallery Exhibition Project: Siswa belajar menjadi kurator dengan mengadakan pameran seni mereka sendiri, mulai dari menata lampu, memasang harga karya, hingga mempresentasikannya ke kolektor/pengunjung.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/anggar&panahan.png" alt="Kunjungan Industri" onerror="this.src='https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>fencing & archery </h3>
                                    <p>Mock Tournament Simulation: Dibanding hanya latihan fisik, siswa langsung disimulasikan dalam situasi turnamen resmi lengkap dengan sistem poin digital, wasit, dan tekanan mental kompetis dan Latihan langsung di luar ruangan dengan kondisi angin asli untuk belajar bagaimana mengoreksi bidikan secara instan tanpa teori buku.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kegiatan bljr bahasa.png" alt="Kunjungan Industri" onerror="this.src='https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>Global Languages Society</h3>
                                    <p>Cultural Immersive Day: Satu hari penuh di mana siswa hanya boleh berbicara menggunakan bahasa asing yang dipelajari, sambil mempraktikkan tradisi negara tersebut (misalnya: tata cara minum teh ala Jepang atau Prancis) dan Global Debate Simulation: Melatih kemampuan berbicara dengan melakukan debat santai menggunakan bahasa asing mengenai topik-topik populer anak muda di dunia</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kuliner.png" alt="Kunjungan Industri" onerror="this.src='https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>Culinary Arts</h3>
                                    <p>The Blind Taste Challenge: Siswa ditutup matanya untuk menebak bahan dan bumbu premium, lalu langsung mempraktikkan teknik memasak menggunakan bahan tersebut tanpa resep tertulis.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter praktik">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kegiatan golf.png" alt="Kunjungan Industri" onerror="this.src='https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Learning</span>
                                    <h3>Golf</h3>
                                    <p>Real-Course Strategy Session: Siswa langsung dibawa ke lapangan golf 18-hole asli untuk belajar cara membaca kontur rumput, arah angin, dan memilih stik golf (club) yang tepat di tiap rintangan.</p>
                                </div>
                            </div>




                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/gedung utama.png" alt="Gedung Sekolah" onerror="this.src='https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Infrastruktur Gedung Utama</h3>
                                    <p>A prestigious main building infrastructure with modern architectural design, smart classroom systems, industry-standard laboratories, high-speed elevators, digital security systems, eco-friendly environments, and world-class educational facilities that reflect professionalism and innovation.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/perpus.png" alt="Perpustakaan Digital" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Perpustakaan & Library Hub</h3>
                                    <p>A spacious and luxurious library designed with a modern interior concept, featuring thousands of collections of books, digital learning facilities, private study rooms, discussion areas, and high-speed internet access to support students’ academic excellence and research activities.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/auditorium gambar.png" alt="Auditorium" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Auditorium</h3>
                                    <p>An elegant and grand auditorium equipped with advanced sound systems, LED screens, professional stage lighting, and comfortable seating capacity for seminars, performances, graduation ceremonies, and international school events.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/asrama.png" alt="Asrama" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Asrama & Dormitory</h3>
                                    <p>A premium 10-story dormitory with an apartment-style design, providing modern bedrooms, study lounges, cafeterias, security systems, and comfortable living facilities to create a safe and exclusive environment for students</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/studio dance.png" alt="Studio Dance" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Studio Dance</h3>
                                    <p>A modern luxury dance studio featuring full-wall mirrors, premium wooden flooring, advanced audio systems, aesthetic lighting, and spacious practice areas suitable for professional dance training and performances.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/fitness room.png" alt="Fitness Room" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Fitness Room</h3>
                                    <p>A spacious and exclusive fitness room equipped with modern gym equipment, cardio machines, strength-training facilities, personal training areas, and a comfortable environment that supports students’ health and fitness.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lapangan gambar.png" alt="Sport Court" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Indoor And Outdoor Sport</h3>
                                    <p>Large-scale indoor and outdoor sports facilities designed with international standards, featuring multifunction courts, professional lighting systems, spectator seating, and complete equipment for various sports activities and competitions.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kolam renang.png" alt="Swimming Pool" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Swimming Pool</h3>
                                    <p>A luxurious semi-Olympic swimming pool equipped with modern seating areas, professional training facilities, clean changing rooms, and aesthetic surroundings that support sports activities and student relaxation</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lapangan golf.png" alt="Golf" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Golf Sport</h3>
                                    <p>A vast and elite golf course designed with premium landscaping, professional practice areas, and exclusive club facilities that provide students with a high-class sports and leisure experience..</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lapangan basket.png" alt="Basketball" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Basketball Sport</h3>
                                    <p>A premium basketball sports area with professional indoor and outdoor courts, high-quality flooring, modern scoreboards, training facilities, and spectator stands for tournaments and student athletic development.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/koseling room.png" alt="Counseling" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>Konseling Room</h3>
                                    <p>A modern and comfortable counseling room designed to provide students with emotional support, academic guidance, mental wellness services, and private consultation spaces in a calm and professional atmosphere.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter fasilitas">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/internasional class.png" alt="International Class" onerror="this.src='https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Facilities</span>
                                    <h3>International Class</h3>
                                    <p>An advanced international class program using global-standard curricula, smart classroom technology, bilingual learning systems, and interactive teaching methods to prepare students for global education and careers.</p>
                                </div>
                            </div>





                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul robotik.png" alt="Futsal" onerror="this.src='https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Klub Robotik & AI</h3>
                                    <p>A forward-thinking tech hub where students build the future. Members do not just assemble basic kits; they design complex autonomous robots and program them using advanced Artificial Intelligence and machine learning algorithms. The club focuses on solving real-world engineering problems and competing in high-level global tech competitions.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul panahan.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Archery</h3>
                                    <p>his club focuses on the ancient and noble discipline of bowmanship. Students are trained by experts to master their stance, breathing, and release to hit targets with absolute precision. Archery develops exceptional mental focus, upper-body strength, and emotional composure under pressure.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul golf.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Golf</h3>
                                    <p>The Golf Club provides elite training in one of the world’s most prestigious sports. Students practice their swing, putting techniques, and course management on professional greens. In addition to physical skills, the club heavily emphasizes the etiquette, patience, and integrity inherent to the game.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul fencing.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Fencing</h3>
                                    <p>Known as a sport of discipline and intellect, the Fencing Academy trains students in the traditional art of swordsmanship. Members learn the precise footwork, agility, and mental strategy required for foil, épée, or sabre combat. It is an elite sport that builds lightning-fast reflexes, physical fitness, and sharp tactical thinking.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul fine art.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Fine Arts</h3>
                                    <p>The Fine Arts Guild offers a premium space for visual expression and classical art techniques. Students dive deep into oil painting, sculpting, printmaking, and contemporary art forms. The club also focuses on art history and exhibition curation, preparing members to showcase their masterpieces in professional gallery settings</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul culinary art.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Culinary Arts</h3>
                                    <p>This club introduces students to the world of fine dining and professional gastronomy. Moving beyond basic cooking, members learn advanced culinary techniques, pastry arts, food plating aesthetics, and kitchen management. Guided by professional chefs, students explore global cuisines and the art of creating multi-course gourmet meals.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul dance.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Dance Club</h3>
                                    <p>The Ballet Club nurtures elegance, discipline, and artistic expression through classical ballet training. Students learn proper techniques, posture, flexibility, and performance skills while developing grace, dedication, and self-confidence. The club also prepares members for showcases, competitions, and prestigious performing arts events.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul ballet.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Ballet Club</h3>
                                    <p>The Ballet Club is dedicated to developing grace, discipline, and artistic excellence through professional ballet training. Students learn classical ballet techniques, body coordination, flexibility, posture, and stage performance skills in a supportive and inspiring environment. Through regular practice, recitals, and competitions, members cultivate confidence, perseverance, creativity, and a deep appreciation for the performing arts while representing the school in prestigious cultural events and performances..</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter ekskul">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/eskul renang selam.png" alt="Paskibraka" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Extracurricular Activities</span>
                                    <h3>Akuatik</h3>
                                    <p>The Swimming and Diving Extracurricular is a dedicated space for students to develop their passion, talent, and skills in water sports. Beyond focusing on physical fitness and non-academic achievements, this club equips students with essential life skills, including water safety techniques and the fundamentals of diving. Through structured training guided by professional coaches, members will learn everything from basic gliding techniques to mastering various swimming strokes and building underwater endurance.</p>
                                </div>
                            </div>




                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/art ekspo.png" alt="Pensi" onerror="this.src='https://images.unsplash.com/photo-1465847899084-d164df4dedc6?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Art Performance & Creative Expo</h3>
                                    <p>Acara bulanan megah ini merupakan perayaan kreativitas, bakat, dan semangat siswa, yang menampilkan karya-karya terbaik serta pertunjukan luar biasa dari seluruh anggota ekskul. Panggung Pentas Seni menghadirkan pertunjukan langsung yang memukau, mulai dari orkestra klasik (chamber orchestra), drama teater, tari kontemporer, hingga ansambel musik. Berjalan beriringan, Ekspo Kreatif hadir sebagai pameran galeri kelas atas yang menampilkan proyek-proyek premium siswa, mulai dari lukisan cat minyak murni (fine art) dan pahatan, hingga prototipe robotik mutakhir dan presentasi kuliner mewah. Acara ini berfungsi sebagai wadah bergengsi bagi siswa untuk mengekspresikan visi mereka, mendapatkan apresiasi luas, serta membagikan inovasi mereka kepada orang tua, profesional industri, dan masyarakat.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/event kelulusan.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Graduation Ceremony</h3>
                                    <p>Upacara kelulusan ini merupakan puncak perayaan khidmat sekaligus penghargaan tertinggi bagi para siswa & siswi yang telah menyelesaikan perjalanan akademik mereka dengan gemilang. Acara megah ini dirancang dengan standar internasional untuk menghormati kerja keras, dedikasi, dan pencapaian luar biasa para lulusan sebelum mereka melangkah ke universitas top dunia. Prosesi ini meliputi tradisi pelepasan atribut sekolah, pidato inspiratif dari lulusan terbaik (valedictorian), pemberian penghargaan khusus, hingga momen ikonik pemindahan tali toga. Lebih dari sekadar perpisahan, upacara ini menjadi wadah prestisius untuk melepas para calon pemimpin masa depan memasuki babak baru kehidupan mereka dengan rasa bangga dan percaya diri yang tinggi.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/event univ tour.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Annual China University Tour</h3>
                                    <p>rogram tahunan eksklusif ini mengajak siswa untuk menjelajahi berbagai institusi pendidikan tinggi paling bergengsi dan kampus berbasis teknologi di China. Para peserta akan melihat secara langsung fasilitas akademik kelas dunia, laboratorium penelitian mutakhir, dan kehidupan mahasiswa yang dinamis di pusat global seperti Beijing dan Shanghai. Lebih dari sekadar tur kampus biasa, ekspedisi ini mencakup sesi diskusi interaktif dengan para profesor, membangun relasi dengan mahasiswa internasional, serta lokakarya tentang cara mendapatkan beasiswa universitas papan atas. Ini adalah panduan terbaik bagi siswa yang bermuka untuk mengejar kesuksesan akademik dan karier masa depan di salah satu negara dengan kekuatan ekonomi utama.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/event pertukaran pelajar.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>East Asian Student Exchange Program</h3>
                                    <p>Program pertukaran pelajar eksklusif ini dirancang untuk memberikan pengalaman global yang mendalam bagi siswa di tiga negara pusat kemajuan Asia Timur: Korea, China, dan Jepang. Melalui program ini, siswa akan merasakan langsung sistem pendidikan di sekolah mitra global yang bereputasi tinggi, mengikuti kelas akademik, serta tinggal bersama keluarga lokal (homestay). Program ini tidak hanya berfokus pada penguasaan bahasa asing, tetapi juga membuka wawasan siswa terhadap inovasi teknologi, budaya kerja keras yang disiplin, serta warisan budaya yang kaya. Ini adalah peluang emas bagi siswa untuk membangun jejaring pertemanan internasional sejak dini dan membentuk mentalitas pemimpin global yang siap bersaing di kancah internasional.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/kegiatan bahasa bulanan.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Monthly Art Exhibition & Painting Auction</h3>
                                    <p>Program rutin bulanan yang prestisius ini memadukan apresiasi seni tinggi dengan jiwa filantropi (amal) dan kewirausahaan siswa. Diadakan di galeri eksklusif sekolah, acara ini menjadi wadah untuk memamerkan koleksi lukisan cat minyak murni (fine art) dan mahakarya visual terbaik hasil kurasi siswa setiap bulannya. Puncak dari acara ini adalah sesi Lelang Lukisan Langsung (Live Auction), di mana orang tua siswa, kolektor seni, dan tamu VIP dapat menawar karya favorit mereka secara kompetitif. Seluruh atau sebagian hasil keuntungan dari lelang ini akan didonasikan untuk yayasan kemanusiaan global, mengajarkan siswa bagaimana sebuah karya seni bernilai tinggi dapat memberikan dampak nyata dan perubahan positif bagi dunia.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/industri visit.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Industrial Visit</h3>
                                    <p>Program kunjungan langsung ke perusahaan dan industri global terkemuka untuk melihat proses kerja nyata. Siswa dapat mengamati penerapan teknologi mutakhir di lapangan, belajar dari para profesional, dan memahami standar kerja internasional. Kegiatan ini bertujuan menjembatani teori di kelas dengan realitas di dunia industri.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter event">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/event ekspo.png" alt="Wisuda" onerror="this.src='https://images.unsplash.com/photo-1523580494863-6f3031224574?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Event</span>
                                    <h3>Organizing the Annual School Event</h3>
                                    <p>Program berskala besar yang mempercayakan siswa sebagai panitia utama untuk merancang, mengelola, dan mengeksekusi acara tahunan megah sekolah. Melalui kegiatan ini, siswa belajar memimpin tim, mengelola anggaran, bernegosiasi dengan sponsor, dan menyelesaikan masalah di lapangan. Program ini menjadi wadah terbaik untuk mengasah jiwa kepemimpinan dan manajemen proyek nyata.</p>
                                </div>
                            </div>










                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba ISEF.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>International Science & Engineering Fair (ISEF) Winners (Pemenang Kompetisi Riset Ilmiah Internasional)</h3>
                                    <p>"Our Highest Commendation to the Winners of the International Science & Engineering Fair (ISEF). You have paved the way for future global innovations!"(Apresiasi Tertinggi kami bagi para Pemenang ISEF. Kalian telah membuka jalan bagi inovasi global masa depan!)</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba fine art.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>International Youth Fine Arts Exhibition Awards (Penghargaan Pameran Seni Rupa Remaja Internasional)</h3>
                                    <p>Ucapan selamat paling hangat untuk para pemenang International Youth Fine Arts Exhibition Awards. Mahakaryamu tidak hanya memikat mata dunia, tetapi juga membuktikan bahwa kreativitas tidak memiliki batas!.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba panahan.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>National Archery Tournament Champions (Juara Turnamen Panahan Nasional)</h3>
                                    <p>Selamat yang sebesar-besarnya kepada Juara Turnamen Panahan Nasional kami! Fokusmu yang tak tergoyahkan dan akurasi emasmu telah mencapai standar keunggulan. Kami sangat bangga atas kemenangan bersejarah ini!.</p>
                                </div>
                            </div>


                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba festival.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>Chamber Orchestra International Grand Prix (Juara Utama Festival Orkestra Klasik Internasional)</h3>
                                    <p>Our grandest congratulations to the school's Chamber Orchestra for winning the International Grand Prix! Your breathtaking symphony has resonated across borders and touched the hearts of the world. A truly historic masterpiece!.</p>
                                </div>
                            </div>


                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba robootik.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>World Robot Olympiad (WRO) Champions (Juara Olimpiade Robotik Dunia)</h3>
                                    <p>Phenomenal achievement! Huge congratulations to our students for becoming the World Robot Olympiad (WRO) Champions. Your groundbreaking innovation and mastery in robotics have put us at the forefront of global technology!.</p>
                                </div>
                            </div>

                            <div class="item-galeri-neon item-filter prestasi">
                                <div class="wrapper-foto-galeri">
                                    <img src="assets/lomba golf.png" alt="Juara LKS" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=500'">
                                </div>
                                <div class="keterangan-galeri">
                                    <span class="badge-kategori">Achievement</span>
                                    <h3>Junior Golf Championship Winners (Juara Turnamen Golf Junior)</h3>
                                    <p>Congratulations to our Junior Golf Championship Winners! Your incredible precision, strategic focus, and championship spirit on the green have brought home a spectacular victory. Keep inspiring on and off the course!.</p>
                                </div>
                            </div>



                        </div> <div style="margin-top: 35px;">
                            <a href="index.php" class="tombol-kembali">← Kembali ke Dashboard</a>
                        </div>

                     </div> </div> </div> </div> <div class="footer">
            <div class="footer-box">
                <p>Copyright &copy; 2026 - ELITE VOCATION HIGH SCHOOL 1 South Jakarta</p>
            </div>
        </div>

        <script>
        function filterGaleri(kategori) {
            let tombols = document.querySelectorAll('.btn-filter');
            tombols.forEach(btn => btn.classList.remove('aktif'));
            event.target.classList.add('aktif');

            let items = document.querySelectorAll('.item-filter');
            items.forEach(item => {
                if (kategori === 'semua') {
                    item.style.display = 'flex';
                    item.style.animation = 'none';
                    item.offsetHeight; 
                    item.style.animation = null;
                } else {
                    if (item.classList.contains(kategori)) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        }
        </script>
    </body>
</html>