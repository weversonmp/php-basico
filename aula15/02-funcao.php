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
    include "funcoes.php";
    function teste(&$x) {
      $x +=2;
      echo "<p>O valor de x é $x</p>";
    }

    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a</p>";

    ola();
    mostraValor(55);
    ?>
  </div>
</body>

</html>