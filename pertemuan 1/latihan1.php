<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<title>Biodata</title>
    <style>
        body {
            text-align: center;
        }
        .red-text{
            color: red;
        }
        .blue-text {
            color: blue;
        
        }
    </style>
</head>
<body>

<h2 class="red-text">Biodata</h2>

<?php
// Data biodata
$Nama       = "Anita Nirmala";
$Email      = "anitanrmla13@gmail.com";
$Jurusan    = "Teknik Informatika";
$Hoby       = "Bernyanyi";


// Menampilkan biodata
echo "<p class='blue-text'>Nama:<b> $Nama</b></p>";
echo "<p class='blue-text'>Email: $Email</p>";
echo "<p class='blue-text'>Jurusan: $Jurusan</p>";
echo "<p class='blue-text'>Hoby: $Hoby</p>";
?>



<h2 class="blue-text">Kesan Pertama Kali Belajar PHP</h2>

<?php
$kesan = "Sangat menarik! Saya merasa sangat antusias ketika pertama kali mempelajari PHP. Sangat menyenangkan bisa membuat halaman web dinamis dan berinteraksi dengan pengguna.";
?>

<p><?php echo $kesan; ?></p>

</body>
</html>