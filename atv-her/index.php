<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'professor.php';
        require 'aluno.php';

        $al1 = new Aluno("Rogison", 12348765, "¯\_(ツ)_/¯", 20181, "2º DS A");
        $pr1 = new Professor ("Jaias", 87651234, "ಠ_ಠ", 1854678, "Matematica");

        echo "<p>Nome: ".$al1->getNome()."</p>";
        echo "<p>RG: ".$al1->getRG()."</p>";
        echo "<p>Endereço: ".$al1->getEndereco()."</p>";
        echo "<p>Codigo: ".$al1->getCodigo()."</p>";
        echo "<p>Turma: ".$al1->getTurma()."</p>";
        echo "<hr>";
        echo "<p>Nome: ".$pr1->getNome()."</p>";
        echo "<p>RG: ".$pr1->getRG()."</p>";
        echo "<p>Endereço: ".$pr1->getEndereco()."</p>";
        echo "<p>Registro: ".$pr1->getRegistro()."</p>";
        echo "<p>Disciplina: ".$pr1->getDisciplina()."</p>";

    ?>
</body>
</html>