<?php
echo "7. Faça um algoritmo PHP que receba por URL dois valores quaisquer e imprime todos os valores intermediários a ele, 
<br>veja exemplo: • Primeiro Valor = 5 • Segundo Valor = 15 • Imprime: 6 7 8 9 10 11 12 13 14<br>";

echo "<br>Para a operação funcionar digite ?numero1=...&numero2... na Url<br>";

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "Numero inicial " . $numero1 . " numero final " . $numero2 . "<br><br>";

for($x=$numero1+1; $x<$numero2;$x++){
    echo  $x . "  ";
}


?>