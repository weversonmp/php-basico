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
    for ($i = 0; $i <= 10; $i++) {
      if ($i % 3 == 0)
        continue;
      echo $i . "-";
    }
    echo "Fim"
    ?>
  </div>
</body>

</html>