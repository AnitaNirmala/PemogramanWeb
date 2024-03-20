<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form action="" method="post">
        <label for="nilai1">Nilai awal:</label>
        <input type="number" id="nilai1" name="nilai1" min="0"><br><br>
        <label for="nilai2">Nilai akhir:</label>
        <input type="number" id="nilai2" name="nilai2" min="0"><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    // Fungsi untuk memeriksa apakah suatu bilangan ganjil habis dibagi 3
    function isGanjilHabisDibagi3($number) {
        return ($number % 2 != 0 && $number % 3 == 0);
    }

    // Memeriksa apakah form dikirimkan
    if (isset($_POST['hitung'])) {
        // Mengambil nilai awal dan nilai akhir dari form
        $nilai_awal = $_POST['nilai1'];
        $nilai_akhir = $_POST['nilai2'];

        // Validasi nilai awal dan nilai akhir
        if ($nilai_awal < 0 || $nilai_akhir < 0) {
            echo "Nilai awal dan nilai akhir harus lebih besar dari 0.";
        } else {
            // Inisialisasi jumlah bilangan dan jumlah nilai
            $jumlah_bilangan = 0;
            $jumlah_nilai = 0;

            // Cetak deret bilangan ganjil habis dibagi 3 dan hitung jumlahnya
            echo "Deret bilangan ganjil habis dibagi 3 antara $nilai_awal dan $nilai_akhir adalah: ";
            for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
                if (isGanjilHabisDibagi3($i)) {
                    echo $i . " ";
                    $jumlah_bilangan++;
                    $jumlah_nilai += $i;
                }
            }

            // Cetak jumlah bilangan yang tampil
            echo "<br>Jumlah bilangan yang tampil: $jumlah_bilangan<br>";

            // Cetak jumlah nilai bilangan yang tampil
            echo "Jumlah nilai bilangan yang tampil: $jumlah_nilai";
        }
    }
    ?>
</body>
</html>
