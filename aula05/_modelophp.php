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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $soma = $n1 + $n2;
    echo "A soma entre $n1 e $n2 é igual a: $soma";

    ?>
  </div>
</body>

</html>