<?php


if(isset($_POST['submit']))
{
  

include_once('conexao.php');
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$link_imagem = $_POST['link_imagem'];

$result = mysqli_query($conexao, "INSERT INTO produto(nome,preco,quantidade,categoria,link_imagem) 
VALUES ('$nome','$preco','$quantidade','$categoria','$link_imagem')");

header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir produto</title>
</head>
<body>
  <form action="inserir_produto.php" method="post">
    <input type="text" name="nome" placeholder="Nome do produto">
    <input type="float" name="preco" placeholder="Preço">
    <input type="number" name="quantidade" placeholder="Quantidade">
    <input type="text" name="categoria" placeholder="Categoria">
    <input type="text" name="link_imagem" placeholder="Link da imagem">
    <button type="submit">Enviar</button>
  </form>
</body>
</html>