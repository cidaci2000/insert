<?php

// Conexão com o banco de dados
include_once ('conexao.php');

// Dados do formulário

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$categoria = $_POST["categoria"];
$imagem = $_FILES["imagem"]["name"];

// Upload da imagem
move_uploaded_file($_FILES["imagem"]["tmp_name"], "../imagem/" . $imagem);

// Inserção dos dados no banco de dados
$sql = "INSERT INTO produtos (nome, preco, quantidade, categoria, imagem) VALUES ('$nome', $preco, $quantidade, '$categoria', '$imagem')";
$conexao->query($sql);

// Redirecionamento para a página principal
header("Location: index.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action=" " method="post" enctype="multipart/form-data">
        <div class="campos">
            <label for="nome">Nome do produto</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="campos">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" required>
        </div>
        <div class="campos">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>
        <div class="campos">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" required>
                <option value="eletronicos">Eletrônicos</option>
                <option value="roupas">Roupas</option>
                <option value="alimentos">Alimentos</option>
                <option value="outros">Outros</option>
            </select>
        </div>
        <div class="campos">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" required>
        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>