<?php

require_once 'pessoa.php';

class Professor extends Pessoa{
    private $registro;
    private $disciplina;

    function __construct($nome, $RG, $endereco, $registro, $disciplina){
        parent::__construct($nome, $RG, $endereco);
        $this->registro = $registro;
        $this->disciplina = $disciplina;
    }

    public function getRegistro(){
        return $this->registro;
    }

    public function getDisciplina(){
        return $this->disciplina;
    }

    public function setRegistro($registro){
        $this->registro = $registro;
    }

    public function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }

    public function status(){
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "<p>RG: ".$this->getRG()."</p>";
        echo "<p>Endereço: ".$this->getEndereco()."</p>";
        echo "<p>Registro: ".$this->getRegistro()."</p>";
        echo "<p>Disciplina: ".$this->getDisciplina()."</p>";
    }
}

?>