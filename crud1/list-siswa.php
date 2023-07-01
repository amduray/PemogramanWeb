<?php include("config.php"); ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- Menambahkan stylesheet dari Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <!-- Menggunakan kelas "btn" untuk gaya tombol -->
        <a class="btn btn-primary" href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
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
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>";
            // Menggunakan kelas "btn" untuk gaya tombol
            echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-primary'>Edit</a> ";
            echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <!-- Menambahkan script dari Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
