<?php
// inisialisasi variabel
$nip = "100111";
$nama = "nama anda";
$gaji_pokok = 2000000;
$bonus = 500000;
$tunjangan = $gaji_pokok * 0.05; // 5% dari gaji pokok
$pajak = $gaji_pokok * 0.1; // 10% dari gaji pokok
$total_gaji = $gaji_pokok + $bonus + $tunjangan - $pajak;

// menampilkan output
echo "=====================\n";
echo "NIP = $nip\n";
echo "Nama pegawai = $nama\n";
echo "=====================\n";
echo "Gaji pokok = Rp. " . number_format($gaji_pokok, 0, ',', '.') . "\n";
echo "Bonus = Rp. " . number_format($bonus, 0, ',', '.') . "\n";
echo "Tunjangan = Rp. " . number_format($tunjangan, 0, ',', '.') . "\n";
echo "Pajak = Rp. " . number_format($pajak, 0, ',', '.') . "\n";
echo "=====================\n";
echo "Gaji yang harus dibayarkan Rp. " . number_format($total_gaji, 0, ',', '.') . "\n";
?>
