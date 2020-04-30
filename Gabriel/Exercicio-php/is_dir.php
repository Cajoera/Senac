<?php
$file = "images";
// usado para verificar se trata-se de um diretorio
if(is_dir($file)) {
  echo ("$file é um diretorio");
} else {
  echo ("$file não é um diretorio");
}
?>