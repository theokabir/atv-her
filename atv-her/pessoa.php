<?php

class Pessoa{
    private $nome;
    private $RG;
    private $endereco;


    function __construct($nome, $RG, $endereco){
        $this->nome = $nome;
        $this->RG = $RG;
        $this->endereco = $endereco;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getRG(){
        return $this->RG;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setRG($RG){
        $this->RG = $RG;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function status(){
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "<p>RG: ".$this->getRG()."</p>";
        echo "<p>Endereço: ".$this->getEndereco()."</p>";
    }
}

?>