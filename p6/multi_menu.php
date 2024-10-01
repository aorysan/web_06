<?php
$menu = [
    ["nama" => "Beranda"],
    [
        "nama" => "Berita",
        "SubMenu" => [
            ["nama" => "Wisata", "SubMenu" => [
                ["nama" => "Pantai"],
                ["nama" => "Gunung"]
            ]],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['SubMenu']) && is_array($item['SubMenu'])) {
            echo "<ul>";
            tampilkanMenuBertingkat($item['SubMenu']);
            echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>