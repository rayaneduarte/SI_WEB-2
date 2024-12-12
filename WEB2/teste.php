<?php
require_once 'conexao.php';

try{
    $conexao = Conexao :: conectar();
    echo "Conexão estabelecida com sucesso!";
} catch (Exception $e){
    echo "Falha na conexão:" . $e->getMessage();
}