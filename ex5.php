<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>
<body>

<?php


echo "<br><br>";
$dia = 6;
switch ($dia) {
case '1':
    echo "domingo";
    break;
case '2':
        echo "segunda-feira";
        break;
case '3':
        echo "terça-feira";
        break;
case '4':
        echo "quarta-feira";
        break;
case '5':
        echo "quinta-feira";
        break;        
case '6':
        echo "sexta-feira";
        break;
case '7':
        echo "sábado";
        break;  
default:
    echo "Dia Inválido";
    break;
}

?>
</body>
</html>