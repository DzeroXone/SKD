<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
</div>
<div>
<p class="vigener">Want to Enkrip a text?.</p>
    <a href="Vigener.php">Vigener Enkriptor</a>
    <a href="Caesar1.php">Caesar Enkriptor</a>
</div>
    <a href="logout.php">Logout</a>
</body>
</html>