<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "variabel a : " . $a . ", variabel b : " . $b . "<br>"; 
echo "Hasil tambah : " . $hasilTambah . "<br>";
echo "Hasil kurang : " . $hasilKurang . "<br>";
echo "Hasil kali : " . $hasilKali . "<br>";
echo "Hasil bagi : " . $hasilBagi . "<br>";
echo "Hasil sisa bagi : " . $sisaBagi . "<br>";
echo "Hasil pangkat : " . $pangkat . "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "variabel a : " . $a . ", variabel b : " . $b . "<br>";
echo "Hasil sama : " . $hasilSama . "<br>";
echo "Hasil tidak sama : " . $hasilTidakSama . "<br>";
echo "Hasil lebih kecil : " . $hasilLebihKecil . "<br>";
echo "Hasil lebih besar : " . $hasilLebihBesar . "<br>";
echo "Hasil lebih kecil sama : " . $hasilLebihKecilSama . "<br>";
echo "Hasil lebih besar sama : " . $hasilLebihBesarSama . "<br>";

$hasiland = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "variabel a : " . $a . ", variabel b : " . $b . "<br>";
echo "Hasil and : " . $hasiland . "<br>";
echo "Hasil or : " . $hasilor . "<br>";
echo "Hasil not a : " . $hasilNotA . "<br>";
echo "Hasil not b : " . $hasilNotB . "<br>";

echo "variabel a : " . $a . ", variabel b : " . $b . "<br>";
$a += $b;
echo "Hasil += : " . $a . "<br>";
$a -= $b;
echo "Hasil -= : " . $a . "<br>";
$a *= $b;
echo "Hasil *= : " . $a . "<br>";
$a /= $b;
echo "Hasil /= : " . $a . "<br>";
$a %= $b;
echo "Hasil %= : " . $a . "<br>";

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "variabel a : " . $a . ", variabel b : " . $b . "<br>";
echo "Hasil identik : " . $hasilIdentik . "<br>";
echo "Hasil tidak identik : " . $hasilTidakIdentik . "<br>";

$total_kursi = 50;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Persentase kursi yang masih kosong: " . $persentase_kosong . "%";
?>