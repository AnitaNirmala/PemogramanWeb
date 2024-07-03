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
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Grup</title>
</head>
<body>
  <h2>Data Grup</h2>
  <a href="add_group.php">Tambah Grup</a><br><br>
  <table>
    <thead>
      <tr>
        <th>Nama Grup</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='2'>Tidak ada data.</td></tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>