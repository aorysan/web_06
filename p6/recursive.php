<?php
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    
    if ($indeks < $jumlah) {
        tampilkanAngka ($jumlah, $indeks + 1);
    }
}
//panggil diri sendiri selama $indeks <= $jumlah
tampilkanAngka (20);
?>