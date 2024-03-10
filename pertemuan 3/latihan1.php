<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Huruf</title>
</head>
<body>
    <h2>Konversi Nilai Huruf</h2>
    <form action="" method="post">
        <label for="nilai">Masukkan Nilai (0-100):</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if(isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];

        switch (true) {
            case ($nilai >= 85 && $nilai <= 100):
                $grade = "A";
                break;
            case ($nilai >= 70 && $nilai < 85):
                $grade = "B";
                break;
            case ($nilai >= 60 && $nilai < 70):
                $grade = "C";
                break;
            case ($nilai >= 50 && $nilai < 60):
                $grade = "D";
                break;
            case ($nilai < 50 && $nilai >= 0):
                $grade = "E";
                break;
            default:
                $grade = "Nilai tidak valid";
        }

        echo "Nilai $nilai setara dengan grade: $grade";
    }
    ?>
</body>
</html>