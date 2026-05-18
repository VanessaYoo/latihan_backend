<?php
session_start();
if (!isset($_SESSION['username'])) { //apakah ada session tersebut dari login
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>hbhbh
    <h2>Dashboard</h2>
    <p>Selamat datang, <?php echo $_SESSION["username"]; ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>