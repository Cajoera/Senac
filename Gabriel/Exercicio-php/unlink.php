<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Unlink. Usado para excluir um arquivo!");
fclose($file);

unlink("test.txt");
?>