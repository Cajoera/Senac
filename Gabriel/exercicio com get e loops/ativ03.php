<?php
echo "3. Faça um algoritmo em PHP que receba por URL um número e o sistema sorteia outro, 
verifique se o número sorteado é igual ao da URL, se sim exiba Você acertou o número.
 Exiba também o número digitado e o número sorteado.
 Utilize a função rand().Verifique se o que está na URL é um número.<br> ";

 echo "<br>Para a operação funcionar digite ?numero=...   na Url<br>Digite um número entre 0 e 15.<br>";

 $numero = $_GET['numero'];
 $rand = rand(0,15);

 echo "<br>Número digitado = " . $numero ;
 echo "<br>Número gerado aleatoriamente =  " . $rand;

 if($rand == $numero){
    echo "<br><br>Você acertou o número.";
 }else{
    echo "<br><br>Você não acertou o número.";
 };



?>
