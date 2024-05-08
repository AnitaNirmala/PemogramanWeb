<?php
// Data klasemen
$klasemen = array(
    "Irak U-23" => array(
        "P" => 0,
        "M" => 0,
        "S" => 0,
        "K" => 0,
        "Poin" => 0
    ),
    "Arab Saudi U-23" => array(
        "P" => 0,
        "M" => 0,
        "S" => 0,
        "K" => 0,
        "Poin" => 0
    ),
    "Tajikistan U-23" => array(
        "P" => 0,
        "M" => 0,
        "S" => 0,
        "K" => 0,
        "Poin" => 0
    ),
    "Thailand U-23" => array(
        "P" => 0,
        "M" => 0,
        "S" => 0,
        "K" => 0,
        "Poin" => 0
    )
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_negara = $_POST['nama_negara'];
    $jumlah_pertandingan = $_POST['jumlah_pertandingan'];
    $jumlah_menang = $_POST['jumlah_menang'];
    $jumlah_seri = $_POST['jumlah_seri'];
    $jumlah_kalah = $_POST['jumlah_kalah'];
    $nama_operator = $_POST['nama_operator'];
    $nim_mahasiswa = $_POST['nim_mahasiswa'];

    // Hitung jumlah poin
    $jumlah_poin = ($jumlah_menang * 3) + $jumlah_seri;

    // Update data klasemen
    $klasemen[$nama_negara]['P'] += $jumlah_pertandingan;
    $klasemen[$nama_negara]['M'] += $jumlah_menang;
    $klasemen[$nama_negara]['S'] += $jumlah_seri;
    $klasemen[$nama_negara]['K'] += $jumlah_kalah;
    $klasemen[$nama_negara]['Poin'] += $jumlah_poin;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piala Asia U-23 Qatar Group C</title>
</head>
<body>
    <h2 style='text-align: center;'>Data Group C Piala Asia Qatar U-23</h2>
    <p style='text-align: center;'>Per <?php echo date("d F Y H:i:s"); ?> (Waktu dan Jam Sekarang)</p>
    <p style='text-align: center;'>Anita Nirmala/21011401050: <?php echo isset($nama_operator) ? $nama_operator : ''; ?> / <?php echo isset($nama_operator) ? $nim_mahasiswa : ''; ?></p>

    <!DOCTYPE html>
<html>
  <head>
    <title>Input Data Klasemen</title>
  </head>
  <body>
    <h1>Input Data Klasemen Piala Asia U-23 Qatar Group C</h1>
    <form action="proces.php" method="POST">
      <label>Nama Negara:</label>
      <select name="negara">
        <option value="Irak_U-23">Irak U-23</option>
        <option value="Arab Saudi_U-23">Arab Saudi_U-23</option>
        <option value="Tajikistan_U-23">Tajikistan_U-23</option>
        <option value="Thailand_U-23">Thailand_U-23</option>
      </select>
      <br />
      <label>Jumlah Pertandingan (P):</label>
      <input type="number" name="pertandingan" required />
      <br />
      <label>Jumlah Menang (M):</label>
      <input type="number" name="menang" required />
      <br />
      <label>Jumlah Seri (S):</label>
      <input type="number" name="seri" required />
      <br />
      <label>Jumlah Kalah (K):</label>
      <input type="number" name="kalah" required />
      <br />
      <label>Jumlah Poin:</label>
      <input type="number" name="poin" required />
      <br />
      <label>Nama Operator:</label>
      <input type="text" name="operator" required />
      <br />
      <label>NIM Mahasiswa:</label>
      <input type="text" name="nim" required />
      <br /><br>
      <input type="submit" value="Submit" />
      <!-- <input type="button" value="" link="output.php" />
      tombol untuk menuju ke halaman output.php -->
      <br /><br />
      <button onclick="window.location.href='index.php'">
        Lihat Klasemen Grup C Piala Asia Qatar U-23
    </form>
  </body>
</html>
    </form>

    <h2>Data Klasemen Piala Asia U-23 Qatar Group C</h2>
    <table border='1' style='margin: 0 auto;'>
        <tr><th>Nama Negara</th><th>P</th><th>M</th><th>S</th><th>K</th><th>Poin</th></tr>
        <?php
        foreach ($klasemen as $negara => $data) {
            echo "<tr>";
            echo "<td>$negara</td>";
            echo "<td>{$data['P']}</td>";
            echo "<td>{$data['M']}</td>";
            echo "<td>{$data['S']}</td>";
            echo "<td>{$data['K']}</td>";
            echo "<td>{$data['Poin']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>