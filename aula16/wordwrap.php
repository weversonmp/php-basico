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
      $t = "Aqui tem um texo grande que usarei para testar a função wordwrap, segundo o guanabara ela funcona para textos grandes, let's bora testar!!";
      $r = wordwrap($t, 5,"<br>", false);
      $contar = strlen($t);
      echo $contar;
    ?>
  </div>
</body>

</html>