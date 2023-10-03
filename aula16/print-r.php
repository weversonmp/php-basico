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

use function PHPSTORM_META\elementType;

    $x[1] = 5;
    $x[0] = 2;
    $x[2] = 1;
    print_r($x);
    echo "<br>";
    echo "<br>";
    var_dump($x); PHP_EOL;
    echo "<br>";
    echo "<br>";
    var_export($x); PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo "" . gettype($x);
    ?>
  </div>
</body>

</html>