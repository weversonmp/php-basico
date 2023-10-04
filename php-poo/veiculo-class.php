<?php 

  class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
      echo "Andou";
    }

    public function Parar() {
      echo 'Parou';
    }

  }

  class Carro extends Veiculo {
    public $portas;
    
    public function LimparParabrisa() {
      echo '<br>Limpando o Parabrisa...<br>';
    }
}
