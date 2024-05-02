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
  <title>Interrogazioni - Gestione Interrogazioni</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(90deg, #808080, #A9A9A9, #C0C0C0);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  max-width: 800px;
  margin: 20px auto; /* Aggiornato per centrare il container */
  padding: 20px;
  background-color: #fff; /* Cambia il colore dello sfondo */
  border-radius: 10px; /* Aggiungi bordi arrotondati */
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); /* Aggiungi ombra */
  text-align: center; /* Allinea il testo al centro */
}

h1 {
  text-align: center;
  color: #333;
  margin-bottom: 30px;
  font-size: 36px;
}

form {
  text-align: center;
}

button {
  background-color: #778899;
  color: #fff;
  border: none;
  padding: 10px 20px;
  margin: 10px auto; /* Aggiornato per centrare il pulsante */
  cursor: pointer;
  font-size: 18px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #708090;
}

a {
  display: block;
  text-align: center;
  margin-top: 20px;
  color: white;
  text-decoration: none;
  font-size: 16px;
  transition: color 0.3s ease;
}

a:hover {
  color: black;
}


</style>
<body>
  <h1>Gestione Interrogazioni</h1>

  <form action="elenco_persone.php" method="get">
    <input type="hidden" name="azione" value="5a_info">
    <button type="submit">5a Info</button>
  </form>
  <a href="home.php">Torna alla Home</a>
</body>
</html>
