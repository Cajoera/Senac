<?php
echo "6. Faça um algoritmo em PHP que receba por URL um valor qualquer e imprima os valores de 0 até o valor recebido,<br>
exemplo: • Valor recebido = 9 • Impressão do programa – 0 1 2 3 4 5 6 7 8 9.<br><br>";
echo "<br>Para a operação funcionar digite ?numero=...   na Url<br><br>";
$numero = $_GET['numero'];
echo "Numero digitado = " . $numero ."<br>";
for($x=0;$x<=$numero;$x++){
    echo  $x . "  ";
}



?>