<?php

class Pessoa {
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getendereco() {
        return $this->endereco;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getCep() {
        return $this->cep;
    }
}

$temp = new Pessoa();

$temp->setNome("Kezia Dias Domingos");
echo "<h1>" . $temp->getNome() . "</h1> <br>";

$temp->setEndereco("Av. Águia de Haia");
echo "<h2>" . $temp->getEndereco() . "</h1> <br>";

$temp->setBairro("A.E Carvalho");
echo "<h3>" . $temp->getBairro()  . "</h1> <br>";

$temp->setCep("08174-159");
echo "<h4>" . $temp->getCep()  . "</h1> <br>";

?>