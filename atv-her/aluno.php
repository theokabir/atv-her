<?php

require_once 'pessoa.php';

class Aluno extends Pessoa{
    private $codigo;
    private $turma;

    function __construct($nome, $RG, $endereco, $codigo, $turma){
        parent::__construct($nome, $RG, $endereco);
        $this->codigo = $codigo;
        $this->turma = $turma;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getTurma(){
        return $this->turma;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function setTurma($turma){
        $this->turma = $turma;
    }


    function status(){
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "<p>RG: ".$this->getRG()."</p>";
        echo "<p>Endereço: ".$this->getEndereco()."</p>";
        echo "<p>Codigo: ".$this->getCodigo()."</p>";
        echo "<p>Turma: ".$this->getTurma()."</p>";
    }
}

?>