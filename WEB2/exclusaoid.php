<?php
require_once 'conexao.php';

// Verifica se o parâmetro "id" foi passado na URL
if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // Converte o valor recebido para inteiro

    try {
        // Obter a conexão usando a classe Conexao
        $conexao = Conexao::conectar();

        // Preparação da query SQL para exclusão
        $sql = "DELETE FROM contatos WHERE id = :id";
        $stmt = $conexao->prepare($sql);

        // Bind do valor no placeholder
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Executar a exclusão
        if ($stmt->execute()) {
            echo "Registro com ID $id excluído com sucesso!";
        } else {
            echo "Erro ao excluir o registro com ID $id.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Nenhum ID foi fornecido para exclusão.";
}
?>
