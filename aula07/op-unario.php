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
    $a = 560;
    $b = 34;
    $maior = $a > $b ? "a é maior" : "b é maior";
    echo $maior;

    $x = 5;
    $y = 34;
    $maior = $x > $y ? $x + $y : $x - $y;
    echo $maior;

    echo "<br>";
    echo "<br>";

    $ano = $_GET["an"];
    $idade = 2023 - $ano;
    echo "Quem nasceu em $ano tem $idade anos.<br><br>";
    $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório!" : "Não Obrigatório!";
    echo "Dessa forma seu voto é: $tipo"
    ?>
  </div>
</body>

</html>