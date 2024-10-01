<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array</title>
    <style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 40px auto;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f0f0f0;
    }
    </style>
</head>

<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis kelamin' => 'Perempuan'
        ];
        
        echo "<table>";
        echo "<tr><th>Attribute</th><th>Value</th></tr>";
        foreach ($Dosen as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    ?>
</body>

</html>