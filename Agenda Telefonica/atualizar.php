<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Atualizar Contato</h1>
        <?php
        $conn = new mysqli('localhost', 'root', '@Supernatural', 'appagendaweb');

        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        $id = $_GET['id'];
        $sql = "SELECT * FROM contatos WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="atualizar.php?id=<?php echo $id; ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" value="<?php echo $row['celular']; ?>" required><br><br>

            <button type="submit" class="btn">Atualizar</button>
        </form>
        <?php
        } else {
            echo "<p>Contato não encontrado.</p>";
        }

        $conn->close();
        ?>
        <a href="agenda.php" class="btn">Voltar</a>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $conn = new mysqli('localhost', 'root', '@Supernatural12', 'appagendaweb');

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $sql = "UPDATE contatos SET nome = '$nome', email = '$email', celular = '$celular' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Contato atualizado com sucesso!</p>";
    } else {
        echo "<p>Erro: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>
