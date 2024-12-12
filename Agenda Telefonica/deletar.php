<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão ao banco de dados
    $conn = new mysqli('localhost', 'root', '@Supernatural12', 'appagendaweb');

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Deleta o registro com o ID especificado
    $sql = "DELETE FROM contatos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Contato excluído com sucesso!</p>";
    } else {
        echo "<p>Erro ao excluir o contato: " . $conn->error . "</p>";
    }

    $conn->close();
}

header('Location: agenda.php');
exit;
?>
