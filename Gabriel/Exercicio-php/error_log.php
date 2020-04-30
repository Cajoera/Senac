<?php
// Envia mensagem de erro para o servidor 
if (!mysqli_connect("localhost","bad_user","bad_password","my_db")) {
    error_log("Failed to connect to database!", 0);
}

// Envia e-mail para o admin relatando erro
if (!($foo = allocate_new_foo())) {
    error_log("Oh no! We are out of FOOs!", 1, "admin@example.com");
}
?>