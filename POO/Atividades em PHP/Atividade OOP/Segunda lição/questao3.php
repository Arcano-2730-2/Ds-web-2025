<?php
class Veiculo {
    public $modelo;
    public $marca;
    private $velocidade;

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }
}
class Carro extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade()+10);
        echo "O carro está acelerando... Velocidade atual: " . $this->getVelocidade() . " km/h\n";
    }
}
class Moto extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade() + 10);
        echo "A moto está acelerando... Velocidade atual: " . $this->getVelocidade() . " km/h\n";
    }
}

$carro = new Carro();
$carro->modelo = "Fusca";
$carro->marca = "Volkswagen";
$carro->setVelocidade(20);

$moto = new Moto();
$moto->modelo = "CG";
$moto->marca = "Honda";
$moto->setVelocidade(40);

echo "Carro: " . $carro->modelo . " - " . $carro->marca . "\n";
echo "<br>";
echo "<br>";
echo "Moto: " . $moto->modelo . " - " . $moto->marca . "\n";
echo "<br>";
echo "<br>";

$carro->acelerar();
echo "<br>";
$moto->acelerar();
echo "<br>";
echo "<br>";


$moto->acelerar();
echo "<br>";
$moto->acelerar();



?>