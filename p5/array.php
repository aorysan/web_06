<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilailulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus [] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ',$nilaiLulus);


$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

echo "<br>";

foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(',', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
    $mataKuliah = 'Fisika';
    
    echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama: ($nilai[0]), Nilai: ($nilai[1]} <br>";
    }

$siswa = [
    "Alice" => 85,
    "Bob" => 95,
    "Charlie" => 78,
    "David" => 62,
    "Eva" => 90
];

$total_nilai = array_sum($siswa);
$jumlah_siswa = count($siswa);

$rata_rata = $total_nilai / $jumlah_siswa;

echo "<br>Rata-rata kelas: " . $rata_rata . "<br>";

echo "Daftar siswa yang mendapat nilai di atas rata-rata:<br>";

foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rata_rata) {
        echo $nama . " dengan nilai: " . $nilai . "<br>";
    }
}
?>