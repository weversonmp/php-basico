<!DOCTYPE html>
<html>
<head>
<?php 
  $texto = isset($_GET["texto"]) ? $_GET["texto"] : "Texto Genérico";
  $tamanho = isset($_GET["tamanho"]) ? $_GET["tamanho"] : "14px";
  $cor = isset($_GET["cor"]) ? $_GET["cor"] : "black";
?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    #texto {
      color: <?=$cor?>;
      font-size: <?=$tamanho?>px;
    }
  </style>
</head>
<body>
<div>
    <?php
    echo "<p id='texto'>$texto</p>"
    ?>
    <br>
    <br>
    <a href="./cor.html">Voltar</a>
</div>
</body>
</html>
 