<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestione_interrogazioni";

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $password = $_POST['password'];

    // Query per verificare le credenziali
    $sql = "SELECT * FROM professori WHERE nome = '$nome'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utente trovato, verifica la password
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            $_SESSION['nome'] = $nome;
            header('Location: home.php'); // Reindirizza alla pagina home.php
            exit;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Gestione Interrogazioni</title>
</head>

<body>
  <h1>Login</h1>
  <?php if (isset($error) && $error === true) : ?>
    <p style="color: red;">Credenziali non valide.</p>
  <?php endif; ?>
  <form action="login.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Accedi</button>
  </form>
</body>
</html>
