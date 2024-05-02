<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Gestione Interrogazioni</title>
  <link rel="stylesheet" href="stylehome.css">

</head>
<body>
<div class="container">
    <div class="home-box">
  <h1>Benvenuto, <?php echo $_SESSION['nome']; ?>!</h1>
  <p>Qui potete gestire le interrogazioni nelle vostre classi.</p>
  <ul>
    <li><a href="interrogazioni.php">Gestisci Interrogazioni</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>
</html>
