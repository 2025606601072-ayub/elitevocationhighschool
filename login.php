<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

$pesan_error = ""; 

if (isset($_POST['blogin'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['tuser']);
    $password = mysqli_real_escape_string($koneksi, $_POST['tpass']);

    $query = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        header("Location: /tugas_websekolah/admin/index.php");
        exit();
    } else {
        $pesan_error = "Username atau Password yang kamu masukkan salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), 
                        url('logo sklh.png') no-repeat center center fixed !important;
            background-size: cover !important;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            position: relative;
        }

        
        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 1;
        }

       
        .login-card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 2; 
            
            outline: 2px solid rgba(2, 132, 199, 0.4);
            box-shadow: 0 0 20px rgba(2, 132, 199, 0.3), 0 20px 40px rgba(0, 0, 0, 0.2);
            
            
            animation: floatAnimation 4s ease-in-out infinite, glowPulse 3s ease-in-out infinite;
        }

        .card-header-custom {
            background: #0f2038;
            padding: 30px 20px;
            text-align: center;
            color: #ffffff;
        }

        .card-header-custom h4 {
            margin: 0;
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        .card-header-custom p {
            margin: 5px 0 0 0;
            font-size: 13px;
            opacity: 0.8;
        }

        .form-control-custom {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            border-color: #0f2038;
            box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.15);
            outline: none;
        }

        .btn-login {
            background: #0f2038;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 500;
            font-size: 15px;
            transition: background 0.2s ease;
        }

        .btn-login:hover {
            background: #0f2038;
            color: white;
        }

        .error-box {
            background-color: #fef2f2;
            border: 1px solid #fee2e2;
            color: #dc2626;
            font-size: 13px;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
            text-align: center;
        }

        
        @keyframes floatAnimation {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px); /* Naik 10px pas di tengah detik */
            }
            100% {
                transform: translateY(0px);
            }
        }

        @keyframes glowPulse {
            0% {
                outline-color: rgba(2, 132, 199, 0.3);
                box-shadow: 0 0 15px rgba(2, 132, 199, 0.2), 0 20px 40px rgba(0, 0, 0, 0.2);
            }
            50% {
                outline-color: rgba(2, 132, 199, 0.8); /* Cahaya menajam di pinggiran */
                box-shadow: 0 0 25px rgba(2, 132, 199, 0.6), 0 20px 40px rgba(0, 0, 0, 0.2); /* Efek biasnya melebar */
            }
            100% {
                outline-color: rgba(2, 132, 199, 0.3);
                box-shadow: 0 0 15px rgba(2, 132, 199, 0.2), 0 20px 40px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="card-header-custom">
        <h4>Welcome To</h4>
        <p>OUR SCHOOL WEBSITE 我们学校的网站</p>
    </div>
    
    <div class="card-body p-4">
        
        <?php if ($pesan_error != ""): ?>
            <div class="error-box">
                <?= $pesan_error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label text-secondary small fw-medium">Username</label>
                <input type="text" name="tuser" class="form-control form-control-custom" placeholder="Masukkan username" required autocomplete="off">
            </div>
            
            <div class="mb-4">
                <label class="form-label text-secondary small fw-medium">Password</label>
                <input type="password" name="tpass" class="form-control form-control-custom" placeholder="Masukkan password" required>
            </div>
            
            <button type="submit" name="blogin" class="btn btn-login w-100 shadow-sm">Masuk ke Sistem</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>