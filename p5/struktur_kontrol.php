<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai_siswa);

array_shift($nilai_siswa);
array_shift($nilai_siswa);

array_pop($nilai_siswa);
array_pop($nilai_siswa);

$total_nilai = array_sum($nilai_siswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai;

echo "<br>";

$harga_produk = 120000;

$diskon = 20;

if ($harga_produk > 100000) {
    $jumlah_diskon = ($diskon / 100) * $harga_produk;
    
    $harga_setelah_diskon = $harga_produk - $jumlah_diskon;
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.');

echo "<br>";

$poin_pemain = 520;

echo "Total skor pemain adalah: " . $poin_pemain . "<br>";

if ($poin_pemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>