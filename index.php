<?php
require './Estudante.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Acadêmica</title>
</head>
<body>
    <?php
        $estudante = new Estudante();
        echo 'Disciplina matriculada: ' . $estudante->disciplinasMatriculadas();
    ?>
    <br/><hr>

    <?php 
        $ira = $estudante->atualizaIra(9);
        echo 'Índice de rendimento: ' . $ira . '<br/>';

        $ira2 = $estudante->atualizaIra(5);
        echo 'Índice de rendimento: ' . $ira2;
    ?>
</body>
</html>