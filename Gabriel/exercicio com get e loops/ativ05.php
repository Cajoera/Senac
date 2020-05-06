<?php
echo "5. Faça um algoritmo em PHP que receba por URL quatro notas de um aluno, 
calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 
ou a mensagem de Exame  para média inferior a 7.0 e maior ou igual a 5.0 
ou a mensagem de Reprovado para média menor que 5.0 . 
Todas as notas repassadas por URL devem ser numéricas entre ZERO e DEZ. <br>";

echo "<br>Para a operação funcionar digite ?nota1=0&nota...  na Url<br>";

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

$media = ($nota1+$nota2+$nota3+$nota4)/4;

echo "Sua media é = " . $media . "<br>";

if($media>=7){
    echo "Voce foi aprovado";
}elseif($media <7 && $media>=5){
    echo "Voce está em exame";
}else{
    echo "Voce foi reprovado";
}

?>