<?php

class Veiculo{
    //Atributos:

    public $modelo;

    public $marca;
    public $cor;

    protected $seguro;

    private $renavam;

    //Metodo:
    public function ligar(){

    }
}
//Instanciando meus objetos
$polo = new Veiculo(); //Inicio do objeto
$polo->marca = "Wolkswagem"; //Atribuindo valor a um atributo
$polo->renavam = "123123123123";

?>