<?php
session_start();

// Cek apakah pengguna sudah login, jika belum, arahkan ke halaman login
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK 29</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #0d6efd;
            color: #ffffff;
        }

        .navbar-brand {
            font-weight: bold;
            background-image: url('https://smkn29jkt.sch.id/id/wp-content/uploads/2022/07/Picsart_22-07-23_23-34-30-721.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 200px;
            height: 50px;
        }

        .jumbotron {
            background-image: url('https://asset.kompas.com/crops/BjgYNJrbuj9bc7zcy146thhJrRA=/155x0:827x336/750x500/data/photo/2020/11/07/5fa680450a039.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            padding: 100px 0;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .jumbotron p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .jumbotron hr {
            margin: 30px auto;
            width: 50%;
            border-color: #ffffff;
        }

        .container .card {
            height: 100%;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Pendaftaran Siswa Baru SMK 29</h1>
        <p class="lead">SMKN Negeri 29 Jakarta didirikan di ruang hanggar Pesawat Udara Kemayoran Jakarta pada bulan
            Agustus 1954, dikenal dengan STM Penerbangan, dipindahkan lokasinya ke Jln Prof Joko Sutono SH No.1 Kebayoran
            Baru sejak tahun 1958 berdiri di atas luas tanah 20980 m2, merupakan satu-satunya SMK Negeri Kelompok
            Teknologi Industri Udara yang berada di Wilayah Segitiga Emas Jakarta Selatan, dengan spesialisasi Teknologi
            Pesawat Udara satu-satunya di DKI Jakarta memiliki potensi dan peluang yang sangat besar untuk ditingkatkan
            dan dikembangkan.</p>
        <hr class="my-">
        <p>Dalam Usianya yang cukup tua, SMK Negeri 29 Jakarta terus membenahi diri agar dapat eksis sebagai SMK yang
            memiliki spesialisasi Teknologi Penerbangan. Pembenahan itu dimulai dengan Reorientasi sekolah, meliputi
            penyusunan Visi dan Misi yang relevan, strategi pencapaian, target, revitalisasi semua struktur sekolah agar
            dapat bertugas dengan maksimal, tidak ketinggalan efektivitas KBM dengan metode PAKEM (Pembelajaran Aktif,
            Kreatif, Efektif, dan Menyenangkan). Guru bebas mengembangkan metode asalkan sesuai dan tepat dengan
            kompetensi yang dipelajari dan peserta didik menuangkan kreativitasnya dengan penuh tanggung jawab.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Pendaftaran Siswa Baru</h3>
                </div>
                <div class="card-body">
                    <p>Selamat datang di Pendaftaran Siswa Baru SMK 29!</p>
                    <p>Di sini Anda dapat mendaftarkan siswa baru dan melihat daftar siswa yang sudah mendaftar.</p>
                    <a class="btn btn-primary btn-lg" href="form-daftar.php">Daftar Baru</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Siswa yang sudah mendaftar</h3>
                </div>
                <div class="card-body">
                    <p>Berikut adalah daftar siswa yang sudah mendaftar</p>
                    <?php
                    // Ambil data siswa dari database
                    include("config.php");
                    $sql = "SELECT COUNT(*) as total FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    $result = mysqli_fetch_assoc($query);
                    $total_siswa = $result['total'];
                    ?>
                    <h4>Total Siswa: <?php echo $total_siswa; ?></h4>
                    <a class="btn btn-secondary btn-lg" href="list-siswa2.php">Lihat Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
