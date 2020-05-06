<?php
echo "8. Faça um algoritmo em PHP que receba por URL o seu nome e o sistema conte quantas letras tem seu nome 
e exibe em tela, exiba também o nome em ordem inversa e converta todas as letras para maiúsculas.
 Obrigue o nome possuir no mínimo 5 letras.<br><br>";

 $nome = $_GET['nome'];
 $qtd = strlen($nome);
 if($qtd<=5){
        echo "<h1>Digite um nome maior<h1>";
 }else{

 echo $nome . "<br><br>";
 echo "Seu nome contem = " .strlen($nome) . " letras<br>";
 echo "Seu nome ao contrario = " .strrev($nome). " <br>";
 echo "Seu nome em maiuscúlo = " .strtoupper($nome). " <br>";
 }
?>