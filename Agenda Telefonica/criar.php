<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Criar Novo Contato</h1>
        <form action="criar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" required><br><br>

            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="agenda.php" class="btn">Voltar</a>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Conexão ao banco de dados
    $conn = new mysqli('localhost', 'root', '@Supernatural12', 'appagendaweb');

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserção no banco de dados
    $sql = "INSERT INTO contatos (nome, email, celular) VALUES ('$nome', '$email', '$celular')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Contato adicionado com sucesso!</p>";
    } else {
        echo "<p>Erro: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>
