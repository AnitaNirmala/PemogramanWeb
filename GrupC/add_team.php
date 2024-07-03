<?php
require_once 'config.php';

session_start();

// Check if user is logged in
if (!isset($_SESSION['nim'])) {
  header("Location: login.php");
  exit;
}

// Get data from groups table
$sql = "SELECT * FROM groups";
$groups = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $group_id = $_POST['group_id'];
  $wins = $_POST['wins'];
  $draws = $_POST['draws'];
  $losses = $_POST['losses'];
  $points = $_POST['points'];

  // Insert data into teams table
  $sql = "INSERT INTO teams (group_id, name, wins, draws, losses, points) 
          VALUES ('$group_id', '$name', '$wins', '$draws', '$losses', '$points')";
  if ($conn->query($sql) === TRUE) {
    echo "Negara berhasil ditambahkan";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Negara</title>
</head>
<body>
  <h2>Tambah Negara</h2>
  <form method="post">
    <label for="name">Nama Negara:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="group_id">Grup:</label>
    <select id="group_id" name="group_id" required>
      <?php
        if ($groups->num_rows > 0) {
          while($row = $groups->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
        } else {
          echo "<option value=''>Tidak ada data.</option>";
        }
      ?>
    </select><br><br>
    <label for="wins">Menang:</label>
    <input type="number" id="wins" name="wins" required><br><br>
    <label for="draws">Seri:</label>
    <input type="number" id="draws" name="draws" required><br><br>
    <label for="losses">Kalah:</label>
    <input type="number" id="losses" name="losses" required><br><br>
    <label for="points">Poin:</label>
    <input type="number" id="points" name="points" required><br><br>
    <button type="submit">Simpan</button>
  </form>
</body>
</html>