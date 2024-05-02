<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Gestione Interrogazioni</title>
  <style>
   body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom right, #ffffff, #808080, #000000); /* Gradient background */
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-box {
  background-color: rgba(255, 255, 255, 0.5); /* Opaco trasparente */
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

h1 {
  text-align: center;
}

form {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <label for="username">Nome:</label>
        <input type="text" id="username" name="nome" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Accedi</button>
      </form>
    </div>
  </div>
</body>
</html>
