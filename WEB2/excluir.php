<?php
require_once 'conexao.php';

// Verifica se a requisição veio pelo método GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // ID do contato que será excluído
    $id = 1; // Substitua pelo ID desejado ou capture via parâmetro GET, ex.: $_GET['id']

    try {
        // Obter a conexão usando a classe Conexao
        $conexao = Conexao::conectar();

        // Preparação da query SQL que fará a exclusão
        $sql = "DELETE FROM contatos WHERE id = :id";
        $stmt = $conexao->prepare($sql);

        // Bind do valor no placeholder
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Executando a exclusão
        if ($stmt->execute()) {
            echo "Registro excluído com sucesso!";
        } else {
            echo "Erro ao excluir registro.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Requisição inválida. Por favor, use o método GET.";
}
?>

