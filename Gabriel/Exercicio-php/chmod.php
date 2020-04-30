<?php
//permissão para ler e escrever apenas para o dono
chmod("ceil.php" ,0600);

//permissão para ler e escrever apenas para o dono,leitura para os outros
chmod("ceil.php",0644);

//leia e execute para todos os outros
chmod("ceil.php",0755);

// Tudo para o proprietário, leia para o grupo do proprietário
chmod("ceil.php",0740);
?>