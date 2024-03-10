<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="" method="post">
        <label for="nilai1">Nilai 1:</label>
        <input type="number" id="nilai1" name="nilai1" min="0"><br><br>
        <label for="nilai2">Nilai 2:</label>
        <input type="number" id="nilai2" name="nilai2" min="0"><br><br>
        <label for="operator">Operator:</label>
        <select name="operator" id="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        // Mendapatkan nilai-nilai yang diinput
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];

        // Melakukan perhitungan berdasarkan operator yang dipilih
        switch($operator) {
            case 'tambah':
                $hasil = $nilai1 + $nilai2;
                break;
            case 'kurang':
                $hasil = $nilai1 - $nilai2;
                break;
            case 'kali':
                $hasil = $nilai1 * $nilai2;
                break;
            case 'bagi':
                if($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $hasil = "Tidak bisa dibagi oleh 0";
                }
                break;
            default:
                $hasil = "Operasi tidak valid";
        }

        // Menampilkan output
        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Nilai 1: $nilai1 <br>";
        echo "Nilai 2: $nilai2 <br>";
        echo "Operator: $operator <br>";
        echo "Hasil: $hasil";
    }
    ?>
</body>
</html>