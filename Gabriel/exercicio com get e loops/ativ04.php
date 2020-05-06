<?php
echo "4. Faça um algoritmo em PHP que receba por URL um número e exiba a tabuada do mesmo.<br> ";

echo "<br>Para a operação funcionar digite ?numero=.....  na Url<br>";

$numero = $_GET['numero'];
echo "<br>Tabuada do número = " . $numero ."<br><br>";
for($x=1;$x<=50;$x++){
    echo "$x X $numero = " . ($numero*$x). "<br>";
}

?>