<?php
include '../koneksi.php';
session_start();

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil ID secara otomatis baik parameternya bernama ?id= atau ?id_pengguna=
$id_edit = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['id_pengguna']) ? $_GET['id_pengguna'] : null);

if ($id_edit) {
    $id_edit = mysqli_real_escape_string($conn, $id_edit);
    
    // Mengambil data lama secara dinamis tanpa peduli apa nama kolom ID-mu di database
    $res = mysqli_query($conn, "SELECT * FROM pengguna");
    $meta = mysqli_fetch_field($res);
    $nama_kolom_id = $meta->name; 

    $ambil_data = mysqli_query($conn, "SELECT * FROM pengguna WHERE $nama_kolom_id = '$id_edit'");
    $data_lama  = mysqli_fetch_array($ambil_data);
} else {
    header("Location: pengguna.php");
    exit();
}

if (isset($_POST['edit'])) {
    $nama  = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $user  = mysqli_real_escape_string($conn, $_POST['username']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    // Update mendeteksi otomatis urutan kolom urutan ke-1 (nama), ke-2 (username), dan ke-4 (level/status)
    $fields = array();
    $result_fields = mysqli_query($conn, "SELECT * FROM pengguna LIMIT 1");
    while ($finfo = mysqli_fetch_field($result_fields)) {
        $fields[] = $finfo->name;
    }

    $query_update = "UPDATE pengguna SET 
                     {$fields[1]} = '$nama', 
                     {$fields[2]} = '$user', 
                     {$fields[4]} = '$level' 
                     WHERE $nama_kolom_id = '$id_edit'";
                     
    $eksekusi = mysqli_query($conn, $query_update);
    
    if ($eksekusi) {
        echo "<script>
                alert('Data Pengguna Berhasil Diperbarui!');
                window.location.href='pengguna.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Gagal Edit! Salahnya: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengguna - ELITE VOCATION HIGH SCHOOL</title>
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
                 <div class="box-header">Edit Data Pengguna</div>
                 <div class="box-body">
                    <form action="" method="POST" class="form-ubah-password">
                        <div class="form-group">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data_lama[1]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $data_lama[2]; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Level Akses:</label>
                            <select name="level" class="form-control">
                                <option value="Super Admin" <?php if($data_lama[4] == 'Super Admin') echo 'selected'; ?>>Super Admin</option>
                                <option value="Admin" <?php if($data_lama[4] == 'Admin') echo 'selected'; ?>>Admin</option> 
                                <option value="Petugas" <?php if($data_lama[4] == 'Petugas') echo 'selected'; ?>>Petugas</option>
                            </select>
                        </div>
                        <div style="margin-top: 25px;">
                            <button type="submit" name="edit" class="btn-submit">Simpan Perubahan</button>
                            <a href="pengguna.php" style="margin-left:15px; color:#555; text-decoration:none; font-weight:bold;">Batal</a>
                        </div>
                    </form>
                 </div> 
            </div> 
        </div> 
    </div> 
</body>
</html>