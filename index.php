<?php
require_once('Operacao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Valor 1:</label>
        <input type="number" name="valor1" id="valor1"><br />
        <label>Valor 2:</label>
        <input type="number" name="valor2" id="valor2"><br />
        <label>Operação:</label>
        <select name="operacao" id="operacao">
            <option value="0">SELECIONE</option>
            <option value="1">Somar</option>
            <option value="2">Subtrair</option>
            <option value="3">Dividir</option>
            <option value="4">Multiplicar</option>
        </select><br />
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular">
    </form>
    <?php

    
    if (isset($_POST['btnCalcular'])) {

        $operacao = new Operacao();
        $operacao->setValor1($_POST['valor1']);
        $operacao->setValor2($_POST['valor2']);

        switch ($_POST['operacao']) {
            case 1:
                echo 'O resultado da soma: ';
                echo $operacao->somar();
                break;
            case 2:
                echo 'O resultado da subtração: ';
                echo $operacao->subtrair();
                break;
                
            case 3:
                echo 'O resultado da divisão: ';
                echo $operacao->dividir();
                break;
            case 4:
                echo 'O resultado da multiplicação: ';
                echo $operacao->multiplicar();
                break;
    
            default:
                echo 'Selecione uma operação';
                break;
        }
    
    }
    ?>

</body>

</html>