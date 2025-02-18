<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="mes" id="mes">
        <input type="submit" name="btnVerificar" id="btnVerificar" value="Verificar">
    </form>
</body>

</html>

<?php


$nome = "Juliana";

echo "<br/>" . gettype($nome);

echo "<br/><br/>Minha <b>primeira</b> aula de PHP! " . $nome . "<br/>";

$numero = 5;

if ($numero > 5) {
    echo "Numero maior que 5<br/>";
} else {
    echo "Numero menor ou igual a 5<br/>";
}

if ($numero > 5) {
    echo "Numero maior que 5<br/>";
} elseif ($numero == 5) {
    echo "Numero é igual a 5<br/>";
} else {
    echo "Numero menor que 5<br/>";
}

if (isset($_POST['btnVerificar'])) {

    $mes = $_POST['mes'];

    switch ($mes) {
        case 1:
            echo 'Janeiro';
            break;
        case 2:
            echo 'Fevereiro';
            break;
        case 3:
            echo 'Março';
            break;
        case 4:
            echo 'Abril';
            break;
        case 5:
            echo 'Maio';
            break;

        default:
            echo 'Não foi encontrado o mês selecionado';
            break;
    }
}
