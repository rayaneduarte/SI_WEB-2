<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        a { text-decoration: none; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><a href="index.php">Agenda de Contatos</a></h1>
        <button class="btn btn-primary mb-3" onclick="window.location.href='criar.php'">Novo</button>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de dados estáticos. Pode ser substituído por dados do banco de dados -->
                <tr>
                    <td><a href="mostrar.php?id=1">Alexandre Magno e Grande</a></td>
                    <td>alexandre@teste.com.br</td>
                    <td>99-99999-9999</td>
                    <td>
                        <a href="atualizar.php?id=1" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="excluir.php?id=1" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="mostrar.php?id=2">Paulo Antunes Filho</a></td>
                    <td>pantunes@teste.com.br</td>
                    <td>99-99999-9999</td>
                    <td>
                        <a href="atualizar.php?id=2" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="excluir.php?id=2" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="mostrar.php?id=3">João Costa e Silva Furtado</a></td>
                    <td>jsilva@teste.com.br</td>
                    <td>99-99999-9999</td>
                    <td>
                        <a href="atualizar.php?id=3" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="excluir.php?id=3" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="mostrar.php?id=4">Marcos Silva Silvestre</a></td>
                    <td>msilva@teste.com.br</td>
                    <td>99-99999-9999</td>
                    <td>
                        <a href="atualizar.php?id=4" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="excluir.php?id=4" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="mostrar.php?id=5">Sara Barbosa Regina Neto</a></td>
                    <td>sregina@teste.com.br</td>
                    <td>99-99999-9999</td>
                    <td>
                        <a href="atualizar.php?id=5" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="excluir.php?id=5" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
