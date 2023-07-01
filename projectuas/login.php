<?php
session_start();

// Cek apakah pengguna sudah submit form login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proses validasi login
    if ($username === 'admin' && $password === 'admin123') {
        // Login berhasil, set session 'username' dan redirect ke halaman utama
        $_SESSION['username'] = $username;
        header("Location: index2.php");
        exit();
    } else {
        // Login gagal, set pesan error
        $error = "Username atau password salah!";
    }
}

// Redirect ke halaman form pendaftaran jika pengguna memilih daftar baru
if (isset($_POST['daftar'])) {
    header("Location: form-daftar.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | SMK 29</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            background-image: url('https://cdnaz.cekaja.com/media/2020/04/SMK-Negeri-29-STM-Penerbangan-Daftar-SMK-Teknik-atau-STM-Terbaik-di-Jakarta-Tahun-2020.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card {
            width: 600px;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #f8f9fa;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <hr>
                        <form method="POST" action="">
                            <div class="text-center">
                                <button type="submit" name="daftar" class="btn btn-link">Daftar Baru</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://
