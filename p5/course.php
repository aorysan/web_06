<?php
$siswa_kursus = [
    "Alice" => ["Matematika", "Fisika"],
    "Bob" => ["Kimia", "Biologi"],
    "Charlie" => ["Matematika", "Sejarah"]
];

echo "Daftar Siswa dan Kursus yang Diambil Sebelum Penambahan:<br>";
foreach ($siswa_kursus as $nama => $kursus) {
    echo "Nama: " . $nama . " | Kursus: " . implode(", ", $kursus) . "<br>";
}
echo "<br>";

$nama_siswa_baru1 = "David";
$kursus_baru1 = ["Matematika", "Bahasa Inggris"];

$siswa_kursus[$nama_siswa_baru1] = $kursus_baru1;

$nama_siswa_baru2 = "Eva";
$kursus_baru2 = ["Fisika"];

$siswa_kursus[$nama_siswa_baru2] = $kursus_baru2;

$nama_siswa_ada = "Alice";
$kursus_baru3 = ["Kimia"];

if (isset($siswa_kursus[$nama_siswa_ada])) {
    $siswa_kursus[$nama_siswa_ada] = array_merge($siswa_kursus[$nama_siswa_ada], $kursus_baru3);
}

echo "Daftar Siswa dan Kursus yang Diambil Setelah Penambahan:<br>";
foreach ($siswa_kursus as $nama => $kursus) {
    echo "Nama: " . $nama . " | Kursus: " . implode(", ", $kursus) . "<br>";
}
?>