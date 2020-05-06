<?php
echo "2. Faça um algoritmo em PHP que receba por URL dois números, exiba a soma,<br>
 a multiplicação e a divisão dos dois números.Verifique se o que está na URL é um número.<br> ";

 echo "<br>Para a operação funcionar digite ?numero1=...&numero2=...   na Url<br>";
 $numero1 = $_GET['numero1'];
 $numero2 = $_GET['numero2'];

$soma = $numero1 + $numero2 ;
echo "<br>Soma dos numeros é = " . $soma;

$multiplicacao = $numero1 * $numero2 ;
echo "<br>Multiplicação dos numeros é = " . $multiplicacao;

$divisao = $numero1 / $numero2 ;
echo "<br>Divisão dos numeros é = " . $divisao;


?>