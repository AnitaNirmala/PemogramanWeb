<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akademik</title>
</head>
<body>
    <h2>NILAI AKADEMIK</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="matakuliah">Matakuliah:</label>
        <input type="text" id="matakuliah" name="matakuliah" required><br><br>
        <label for="kehadiran">Jumlah Kehadiran:</label>
        <input type="number" id="kehadiran" name="kehadiran" min="0" max="18" required><br><br>
        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required><br><br>
        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" id="nilai_uts" name="nilai_uts" min="0" max="100" required><br><br>
        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" id="nilai_uas" name="nilai_uas" min="0" max="100" required><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $kehadiran = $_POST['kehadiran'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        // Menghitung nilai akhir
        $nilai_akhir = ($kehadiran * 10 / 18) + ($nilai_tugas * 20 / 100) + ($nilai_uts * 30 / 100) + ($nilai_uas * 40 / 100);

        // Menentukan grade
        if($nilai_akhir >= 80) {
            $grade = "A";
        } elseif($nilai_akhir >= 70) {
            $grade = "B";
        } elseif($nilai_akhir >= 60) {
            $grade = "C";
        } elseif($nilai_akhir >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        // Menentukan keterangan
        $keterangan = ($nilai_akhir > 65) ? "Lulus" : "Tidak Lulus";

        // Menampilkan output
        echo "<h3>Detail Nilai:</h3>";
        echo "Nama: $nama <br>";
        echo "NIM: $nim <br>";
        echo "Matakuliah: $matakuliah <br>";
        echo "Jumlah Kehadiran: $kehadiran <br>";
        echo "Nilai Tugas: $nilai_tugas <br>";
        echo "Nilai UTS: $nilai_uts <br>";
        echo "Nilai UAS: $nilai_uas <br>";
        echo "Nilai Akhir: $nilai_akhir <br>";
        echo "Grade: $grade <br>";
        echo "Keterangan: $keterangan";
    }
    ?>
</body>
</html>