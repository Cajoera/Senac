<?php
// Usado para enviar email
//mensagem a ser enviada
$message = "Line 1\nLine 2\nLine 3";


$message = wordwrap($message, 70);

// E-mail
mail('juliocarossi22@gmail.com', 'Teste', $message);
?>