<?php
// Connessione al database
$servername = "localhost"; // O l'indirizzo IP del tuo server MySQL
$username = "root"; // Nome utente del database MySQL
$password = ""; // Password del database MySQL
$dbname = "gestione_interrogazioni"; // Nome del database MySQL

// Connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Query per estrarre 4 persone casuali dal database
$sql = "SELECT nome FROM studenti ORDER BY RAND() LIMIT 4";
$result = $conn->query($sql);

$persone_estratte = array();
if ($result->num_rows > 0) {
    // Memorizza i nomi delle persone estratte in un array
    while($row = $result->fetch_assoc()) {
        $persone_estratte[] = $row["nome"];
    }
} else {
    echo "Nessun risultato trovato nel database.";
}

// Chiusura della connessione al database
$conn->close();
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elenco Persone - Gestione Interrogazioni</title>
  <link rel="stylesheet" href="styleelencop.css">
</head>
<body>
  <h1>Elenco delle Persone</h1>
  <?php if (isset($_POST['estrai'])) : ?>
    <h2>4 persone estratte:</h2>
    <ul>
      <?php foreach ($persone_estratte as $persona) : ?>
        <li><?php echo $persona; ?></li>
      <?php endforeach; ?>
    </ul>
    <a href="elenco_persone.php">Torna all'estrazione</a>
  <?php else : ?>
    <form action="elenco_persone.php" method="post">
      <button type="submit" name="estrai">Estrai</button>
    </form>
    <a href="interrogazioni.php">Torna Indietro</a>
  <?php endif; ?>
</body>
</html>
