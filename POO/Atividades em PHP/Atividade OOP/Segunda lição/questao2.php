<?php
    abstract class Animal {
    public $tipo;
    public function mover(){
        echo "O animal anda";
    }
    public function fazerSom(){}

    }
    class Cachorro extends Animal {
        public function fazerSom() {
        echo "Au Au!";
    }}
    class Gato extends Animal {
    
        public function fazerSom() {
        echo "miauuuu!";
    }}
    class Passaro extends Animal {
        public function mover(){
            parent::mover();
            echo " e voa!";
        }
        public function fazerSom() {
        echo "piu piu";
    }

}
$Cachorro = new Cachorro();
echo "<br>";
$Cachorro->fazerSom();
echo "<br>";
$Cachorro->mover();
echo "<br>";
$Cachorro->tipo ="Cachorro";
echo "<br>";

$Passaro = new Passaro();
echo "<br>";
$Passaro->fazerSom();
echo "<br>";
$Passaro->mover();
echo "<br>";
$Passaro->tipo = "Passaro";
echo "<br>";

$Gato = new Gato();
echo "<br>";
$Gato->fazerSom();
echo "<br>";
$Gato->mover();
echo "<br>";
$Gato->tipo = "Gato";
echo "<br>";
?>