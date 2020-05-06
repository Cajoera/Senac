<?php 
echo "1. Faça um algoritmo em PHP que receba por URL um número e exiba o antecessor e o sucessor desse número. <BR> 
Verifique se o que está na URL é um número.";

echo "<br>Para a operação funcionar digite ?numero=   na Url<br>";

$numero = $_GET['numero'];

$sucessor = $numero + 1 ;
$antecessor = $numero - 1 ;

echo "<br>Numero sucessor " . $sucessor;

echo "<br>Numero antecessor " . $antecessor ;


?>