<?php
class caneta {
    public $modelo;
    public $cor;
    
    public $tamanho;

    public $marca;

    public $espessura;
    
    public function desenhar (){
        echo "Desenhando com a caneta de cor $this->cor";
    }
    public function riscar (){
        echo "Riscando com a caneta $this->modelo";
    }
    public function assinar (){
        echo "Assinando com a caneta da $this->marca";
    }


}

$bic = new caneta();
$bic->modelo = "BIC";
$bic->cor = "Azul";
$bic->tamanho = "Médio";
$bic->marca = "BIC";
$bic->espessura = "Fina";

$bic->desenhar();
echo "<br>";
$bic->riscar();
echo "<br>";
$bic->assinar();
echo "<br>";
echo "<br>";


class bolsa{
    public $modelo;
    public $cor;
    public $tamanho;
    public $peso;
    public $bolsos;

    public function guardar (){
        echo "Guardando na bolsa de cor $this->cor";
    }
    public function levar (){
        echo "Levando a bolsa de tamanho $this->tamanho";
    }
    public function retirar (){
        echo "Retirando o item da bolsa $this->modelo";
    }
}
$bolsa = new bolsa();
$bolsa->modelo = "Bolsa de Mao";
$bolsa->cor = "Preto";
$bolsa->tamanho = "Medio";
$bolsa->peso = "Leve";
$bolsa->bolsos = "2";

$bolsa->guardar();
echo "<br>";
$bolsa->levar();
echo "<br>";
$bolsa->retirar();
echo "<br>";
echo "<br>";
echo "<br>";



class carro{
    public $modelo;
    public $cor;
    public $ano;
    public $combustivel;
    
    public $marca;

    public function acelerar(){
        echo "O carro $this->modelo esta acelerando";
    }
    public function freiar(){
        echo "O carro de $this->ano esta freando";
    }
    public function ligar(){
        echo "O carro da cor $this->cor esta ligado";
    }

}
$carro = new carro();
$carro->modelo = "Ferrari";
$carro->cor = "Vermelho";
$carro->ano = "2019";
$carro->combustivel = "Gasolina";
$carro->marca = "Ferrari";

$carro->acelerar();
echo "<br>";
$carro->freiar();
echo "<br>";
$carro->ligar();
echo "<br>";
echo "<br>";

class livro{
    public $autor;
    public $capa;
    public $editora;
    public $folhas;

    public $genero;

    public function ler() {
        echo "O livro de $this->autor esta sendo lido";
    }
    public function abrir() {
        echo "O livro de $this->editora esta sendo aberto";
    }
    public function fechar() {
        echo "O livro de capa $this->capa esta sendo fechado";
    }
}

$livro = new livro();
$livro->autor = "João";
$livro->capa = "Dura";
$livro->editora = "Editora";
$livro->folhas = "Papel";
$livro->genero = "Ficção";

$livro->ler();
echo "<br>";
$livro->abrir();
echo "<br>";
$livro->fechar();
echo "<br>";
echo "<br>";
echo "<br>";

class tablet{
    public $memoria;
    
    public $marca;

    public $modelo;

    public $ca; //Capacidade de armazenamento

    public $processador;

    public function ligar(){
        echo "A tablet esta ligada";
    }
    public function desligar(){
        echo "A tablet esta desligada";
    }
    public function executar(){
        echo "A tablet esta executando os programas";
    }
    public function exibir(){
        echo "A tablet tem $this->memoria de memoria, da $this->marca";
    }

}
$tablet = new tablet();
$tablet->marca = "Apple";
$tablet->modelo = "iPad";
$tablet->memoria = "256GB";
$tablet->ca = "512GB";
$tablet->processador = "A12 Bionic";

$tablet->ligar();
echo "<br>";
$tablet->desligar();
echo "<br>";
$tablet->executar();
echo "<br>";
$tablet->exibir();
echo "<br>";
echo "<br>";
echo "<br>";




















class ContaBancaria {
    public $numeroconta;
    public $nometitular;
    public $saldo;

    public function exibirNome() {
        return "Ola " . $this->nometitular . "<br>";
    }

    public function exibirSaldo() {
        return "Seu saldo: " . $this->saldo . "<br>";
    }

    public function exibirConta() { 
        return "Numero da conta: " . $this->numeroconta . "<br>";
    }
    public function depositar($deposito){
        $this->saldo += $deposito;
        return "Este é novo saldo ".$this->saldo;
    }
    public function sacar($saque){
        if($this->saldo >= $saque){
            $this->saldo -= $saque;
            return "Este é novo saldo ".$this->saldo;
        }
        else{
            return "Saldo insuficiente";
        }
    }
}

$duque = new ContaBancaria();
$duque->nometitular = "Duque";
$duque->saldo = 50;
$duque->numeroconta = 273027;

echo $duque->exibirNome();
echo "<br>";
echo $duque->exibirSaldo();
echo "<br>";
echo $duque->exibirConta();
echo "<br>";
echo $duque->depositar(deposito: 100);
echo "<br>";
echo $duque->sacar(saque: 50);
echo "<br>";

$bruno = new ContaBancaria();
$bruno->nometitular = "Bruno";
$bruno->saldo = 150;
$bruno->numeroconta = 18276;

echo $bruno->exibirNome();
echo $bruno->exibirSaldo();
echo $bruno->exibirConta();
echo "<br>";

$pacheco = new ContaBancaria();
$pacheco->nometitular = "Pacheco";
$pacheco->saldo = 375;
$pacheco->numeroconta = 975813;

echo $pacheco->exibirNome();
echo $pacheco->exibirSaldo();
echo $pacheco->exibirConta();
echo "<br>";
?>
