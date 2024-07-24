<?php
include('controller/conexao.php');

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];

    // Validar os dados de entrada
    if (empty($descricao)) {
        echo "<h3>Erro: Descrição é obrigatória!</h3><br><br>";
    } else {
        // Inserir dados no banco de dados
        $cad_marca = "INSERT INTO marca (DESCRICAO) VALUES ('$descricao')";
        if (mysqli_query($mysqli, $cad_marca)) {
            echo "<h1>Marca Cadastrada com Sucesso!</h1><br>";
        } else {
            echo "Erro: ". mysqli_error($mysqli). "<br>";
        }
    }
}

mysqli_close($mysqli);
?>