<?php
session_start(); // Mulai sesi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Cek NIM dan password (contoh sederhana, Anda harus menggantinya dengan cara yang lebih aman)
    if ($nim == 'nim_anda' && $password == 'password_anda') {
        $_SESSION['login_user'] = $nim;
        header("location: input_klasemen.php"); // Redirect ke halaman input klasemen setelah login sukses
    } else {
        $error = "NIM atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <p style="color: red;"><?php if(isset($error)) { echo $error; } ?></p>
    </form>
</body>
</html>
