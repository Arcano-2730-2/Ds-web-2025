<?php
class Pessoa {
    public $nome; //Atributo

    public function falar(){
        return "O meu nome é ".$this->nome;
    }
}

$marcus = new Pessoa(); //Instanciar a classe Pessoa
$marcus->nome = "Marcus Ribeiro"; //Atribuindo valor a um atributo
echo $marcus->falar(); //Exibindo um atributo