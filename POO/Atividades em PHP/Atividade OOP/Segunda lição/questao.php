<?php
class Pessoa {
    protected $nome;
    protected $idade;

    public function setDados($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Funcionario extends Pessoa {
    protected $salario;
    protected $cargo;

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function calBonus() {
        if ($this->cargo == "gerente") {
            $bonus = (($this->salario / 100) * 20);
            return $this->salario + $bonus;
        }
        if ($this->cargo == "desenvolvedor") {
            $bonus = (($this->salario / 100) * 10);
            return $this->salario + $bonus;
        } 
    }
}

class Gerente extends Funcionario {
}

class Desenvolvedor extends Funcionario {
}

$gerente = new Gerente();
$desenvolvedor = new Desenvolvedor();

$gerente->setDados("Duque", 35);
$gerente->setSalario(5000);
$gerente->setCargo("gerente");

$desenvolvedor->setDados("Pacheco", 22);
$desenvolvedor->setSalario(2000);
$desenvolvedor->setCargo("desenvolvedor");

echo "O total que o gerente " . $gerente->getNome() . " vai ganhar junto com o bonus " . $gerente->calBonus();
echo "\nO total que o desenvolvedor " . $desenvolvedor->getNome() . " vai ganhar junto com o bonus " . $desenvolvedor->calBonus();
?>