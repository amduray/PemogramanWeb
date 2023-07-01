<?php include("config.php"); ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK 29</title>
    <!-- Menambahkan stylesheet dari Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            margin-bottom: 5px;
        }

        table {
            background-color: #fff;
        }

        th, td {
            text-align: center;
            vertical-align: middle !important;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn-edit {
            background-color: #6c757d;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .total-count {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <!-- Menggunakan kelas "btn" untuk gaya tombol -->
        <a class="btn btn-primary" href="form-daftar.php">Tambah Baru</a>
        <a class="btn btn-secondary" href="index2.php">Home</a>
    </nav>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td><img src='tujuan/" . $siswa['foto'] . "'></td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                echo "<td>";
                // Menggunakan kelas "btn" untuk gaya tombol
                echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-primary btn-edit'>Edit</a> ";
                echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger btn-delete'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p class="total-count">Total: <?php echo mysqli_num_rows($query) ?></p>

    <!-- Menambahkan script dari Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
