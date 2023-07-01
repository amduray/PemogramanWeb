<?php
include("config.php");

if (isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if ($query) {
        // Jika berhasil, alihkan ke halaman index.php dengan status-sukses
        header('Location: index.php?status=sukses');
    } else {
        // Jika gagal, alihkan ke halaman index.php dengan status-gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
