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
    $ano = $_GET["ano"];
    echo "Esse ano é $ano, e ano passado foi " . --$ano;

    ?>
  </div>
</body>

</html>