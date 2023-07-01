<?php
include("config.php");

if (isset($_GET['id'])) {
    // ambil id dari query string 
    $id = $_GET['id'];

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] === 'true') {
            // buat query hapus
            $sql = "DELETE FROM calon_siswa WHERE id=$id";
            $query = mysqli_query($db, $sql);

            // apakah query hapus berhasil? 
            if ($query) {
                header('Location: list-siswa.php');
            } else {
                die("gagal menghapus...");
            }
        } else {
            header('Location: list-siswa.php');
        }
    } else {
        // Tampilkan kotak dialog konfirmasi
        echo '<script>
                var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
                if (result) {
                    window.location.href = "hapus.php?id=' . $id . '&confirm=true";
                } else {
                    window.location.href = "hapus.php?id=' . $id . '&confirm=false";
                }
              </script>';
    }
} else {
    die("akses dilarang...");
}
?>