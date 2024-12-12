<?php
require_once 'conexao.php';

// Verifica se a requisição veio pelo método GET ou POST.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Dados a serem inseridos na tabela "contatos":
    $nome = "Alexandre Magno o Grande";
    $logradouro = "Um";
    $numero = "Dois";
    $bairro = "Tres";
    $cidade = "Quatro";
    $estado = "Cinco";
    $email = "alexandre@exemplo.com.br";
    $celular = "(99) 999999-9999";
    $status = 1; // 1 para ativo, 0 para inativo

    try {
        // Obter a conexão usando a classe Conexao
        $conexao = Conexao::conectar();

        // Preparação da query SQL que vai inserir os dados
        $sql = "INSERT INTO contatos (nome, logradouro, numero, bairro, cidade, estado, email, celular, status)
                VALUES (:nome, :logradouro, :numero, :bairro, :cidade, :estado, :email, :celular, :status)";
        $stmt = $conexao->prepare($sql);

        // Bind dos valores nos placeholders
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':celular', $celular);
        $stmt->bindParam(':status', $status);

        // Executar a query preparada
        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso na tabela contatos!";
        } else {
            echo "Erro ao inserir os dados.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Requisição inválida. Por favor, use o método GET.";
}
?>
