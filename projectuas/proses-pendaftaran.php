<?php
include("config.php");

if(isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Mengambil informasi file foto
    $foto = $_FILES['foto'];
    $foto_name = $foto['name'];
    $foto_tmp = $foto['tmp_name'];
    $foto_error = $foto['error'];

    // Cek apakah ada file foto yang diunggah
    if($foto_error === UPLOAD_ERR_OK) {
        // Tentukan path tujuan untuk menyimpan foto
        $tujuan_foto = 'C:/xampp/htdocs/crud1/tujuan/' . $foto_name;

        // Pindahkan file foto ke folder tujuan
        if(move_uploaded_file($foto_tmp, $tujuan_foto)) {
            // Insert data siswa ke tabel calon_siswa
            $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto_name')";
            $query = mysqli_query($db, $sql);

            if($query) {
                // Jika berhasil, redirect ke halaman list-siswa.php
                header('Location: index.php');
                exit();
            } else {
                // Jika gagal, tampilkan pesan error
                echo "Error: " . mysqli_error($db);
            }
        } else {
            // Jika terjadi error saat memindahkan foto
            echo "Error moving file to destination.";
        }
    } else {
        // Jika terjadi error saat mengunggah foto
        echo "Error uploading file: " . $foto_error;
    }
}
?>
