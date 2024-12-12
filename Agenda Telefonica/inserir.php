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

    // Inserir o contato no banco de dados
    $sql = "INSERT INTO contatos (nome, email, celular) VALUES ('$nome', '$email', '$celular')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Contato adicionado com sucesso!</p>";
    } else {
        echo "<p>Erro ao inserir o contato: " . $conn->error . "</p>";
    }

    $conn->close();

    // Redirecionar para a página principal
    header('Location: agenda.php');
    exit;
} else {
    // Se a requisição não for POST, redireciona para criar.php
    header('Location: criar.php');
    exit;
}
?>
