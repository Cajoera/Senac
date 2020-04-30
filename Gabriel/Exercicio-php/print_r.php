<?php
$a = array ('a' => 'abacaxi', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);//Ira mostrar a infomação completa por ser array
?>

<?php
$b = array ('m' => 'Maria', 'João' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results agora contém a saída de print_r 
?>