<?php
session_start();
?>
<fieldset>
<legend>Cadastrar</legend>
<form method="post" action="acoes.php?acao=cadastrar">
<input type="text" name="nome" placeholder="Digite seu nome">
<input type="text" name="email" placeholder="Digite seu email">
<input type="submit" value="Gravar">


</form>
</fieldset>
<?php
if(!empty($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset ($_SESSION['mensagem']);

?>


<table border="1" width="100%" style="margin-top:10px">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Opções</th>
    </thead>
    <tbody>
        <tr>
            <?php
            require __DIR__ . '/inc/class.crud.php';
            $contatos = new crud();
            $busca = $contatos->read('contatos');
            if ($busca) {
                foreach ($busca as $item) {
                    echo '<tr>';
                    echo '<td>' . $item->id . '</td>';
                    echo '<td>' . $item->nome . '</td>';
                    echo '<td>' . $item->email . '</td>';
                    echo '<td>';
                    echo '<a href="acoes.php?acao=apagar$id'.$item->id.'">';
                    echo 'Apagar';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td coldspan="4>Nada encontrado</td></tr>';
            }


            ?>
        </tr>



    </tbody>
</table>