<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian</h2>
    <table>
        <tr>
            <th></th>
            <?php
            // Membuat baris judul kolom dengan menggunakan looping
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Membuat tabel perkalian dengan menggunakan looping
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom pertama adalah angka basis perkalian
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j; // Menghitung hasil perkalian
                echo "<td>$hasil</td>"; // Menampilkan hasil perkalian dalam sel tabel
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
