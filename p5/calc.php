<?php
echo "Masukkan bilangan pertama: ";
$bilangan1 = trim(fgets(STDIN));

echo "Masukkan bilangan kedua: ";
$bilangan2 = trim(fgets(STDIN));

$bilangan1 = (int)$bilangan1;
$bilangan2 = (int)$bilangan2;

$penjumlahan = $bilangan1 + $bilangan2;
echo "Hasil Penjumlahan: " . $penjumlahan . "\n";

$pengurangan = $bilangan1 - $bilangan2;
echo "Hasil Pengurangan: " . $pengurangan . "\n";

$perkalian = $bilangan1 * $bilangan2;
echo "Hasil Perkalian: " . $perkalian . "\n";

if ($bilangan2 != 0) {
    $pembagian = $bilangan1 / $bilangan2;
    echo "Hasil Pembagian: " . $pembagian . "\n";
} else {
    echo "Pembagian tidak dapat dilakukan karena pembagi adalah 0.\n";
}
?>