<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio10</title>
</head>
<body>
    
<?php

//Faça um Programa que leia três números e mostre o maior e o menor deles.

$valor1 = 150;
$valor2 = 200;
$valor3 = 30;
if($valor1 > $valor2 && $valor1 > $valor3){
    echo "valor maior é o primeiro";
    }else if(($valor2 > $valor1 && $valor2 > $valor3)) {
        echo "valor maior é o segundo";
        }else{
            echo "valor maior é o terceiro";



        }
        echo "<br><br>";
 
 if($valor1 < $valor2 && $valor1 < $valor3){
 echo "valor menor é o primeiro";
 }else if(($valor2 < $valor1 && $valor2 < $valor3)) {
 echo "valor menor é o segundo";
 }else{
  echo "valor menor é o terceiro";





}








?>










</body>
</html>