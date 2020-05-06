<?php
echo "10.Faça um algoritmo em PHP que receba por URL dois números, inicial e final, 
exiba todos os números pares que estão no intervalo dos dois números.
 Os dois campos devem ser de preenchimento obrigatório e numérico, caso contrário exiba um erro.<br> ";

 $numero1 = $_GET['numero1'];
 $numero2 = $_GET['numero2'];

echo "<br>Numero inicial " . $numero1;
echo "<br>Numero final " . $numero2 . "<br>";
for($i = $numero1 ; $i <= $numero2; $i ++){
// $i será o resultado em par da operação 
    if($i % 2 == 0){
        echo "<br>".$i;
    }
}

?>