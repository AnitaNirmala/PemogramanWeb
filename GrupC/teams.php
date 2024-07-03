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

// Get data from teams table
$sql = "SELECT * FROM teams";
$teams = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Negara</title>
</head>
<body>
  <h2>Data Negara</h2>
  <a href="add_team.php">Tambah Negara</a><br><br>
  <table border="1">
    <thead>
      <tr>
        <th>Nama Negara</th>
        <th>Grup</th>
        <th>Menang</th>
        <th>Seri</th>
        <th>Kalah</th>
        <th>Poin</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($teams->num_rows > 0) {
          while($row = $teams->fetch_assoc()) {
            $group_name = "";
            while ($group = $groups->fetch_assoc()) {
              if ($group['id'] == $row['group_id']) {
                $group_name = $group['name'];
                break;
              }
            }
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $group_name . "</td>";
            echo "<td>" . $row["wins"] . "</td>";
            echo "<td>" . $row["draws"] . "</td>";
            echo "<td>" . $row["losses"] . "</td>";
            echo "<td>" . $row["points"] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>Tidak ada data.</td></tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>