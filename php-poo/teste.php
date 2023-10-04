<?php 
  include "veiculo-class.php";

  $palioDoWeverson = new Carro();

  $palioDoWeverson->modelo = "Palio Fire 2015";
  $palioDoWeverson->cor = "Vermelho";
  $palioDoWeverson->ano = 2015;

  print("O carro $palioDoWeverson->modelo, da cor $palioDoWeverson->cor, do ano $palioDoWeverson->ano... ");
  $palioDoWeverson->Andar();

  print($palioDoWeverson->LimparParabrisa());

?>