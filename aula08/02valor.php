<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
    $idade = isset($_GET["nasc"])?(date("Y")-$_GET["nasc"]):"Nada";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";

    echo "$nome tem $idade anos e é $sexo";
    ?>
    <br>
    <br>
    <a href="./ex02.html">Voltar</a>
</div>
</body>
</html>
 