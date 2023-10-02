<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <?php
    $preco = 100;
    echo "R$ ". number_format($preco,2,",") . " é o preço do produto, com 10% fica: R$" . number_format($preco + ($preco * 0.10),2,",");

    ?>
  </div>
</body>

</html>