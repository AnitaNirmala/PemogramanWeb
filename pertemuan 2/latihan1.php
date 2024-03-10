<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-rata Nilai</title>
</head>
<body>
    <h2>Data yang Diinput:</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan"><br><br>
        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" id="nilai_tugas" name="nilai_tugas" min="0" max="100"><br><br>
        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" id="nilai_uts" name="nilai_uts" min="0" max="100"><br><br>
        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" id="nilai_uas" name="nilai_uas" min="0" max="100"><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        // Mendapatkan nilai-nilai yang diinput
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        // Menghitung rata-rata nilai
        $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

        // Menampilkan output
        echo "<h2>Output:</h2>";
        echo "Nama: $nama <br>";
        echo "Jurusan: $jurusan <br>";
        echo "Nilai Tugas: $nilai_tugas <br>";
        echo "Nilai UTS: $nilai_uts <br>";
        echo "Nilai UAS: $nilai_uas <br>";
        echo "Rata-rata: $rata_rata";
    }
    ?>
</body>
</html>