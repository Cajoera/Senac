<?php
session_start();
require __DIR__ . '/inc/class.crud.php';
$contato = new CRUD();
$table = 'contatos';

if ($_GET['acao'] == 'cadastrar') {
    $_SESSION['mensagen'] = 'Falha ao cadastrar';
    if ($contato->create($table, $_POST) > 0) {
        $_SESSION['mensagen'] = 'Sucesso ao cadastrar';
    }
    header('location:contatos.php');
}

if($_GET['acao']=="apagar" && is_numeric($_GET['id'])){
    $contato->delete($table,'id='.$_GET['id']);
    header('location:contatos.php');
}
if($_GET['acao']=="atualizar" && is_numeric($_GET['id'])){
    $_SESSION['mensagen'] = 'Falha ao atualizar';
    $contato->update($table,$_POST,'id='.$_GET['id'])>0{
        $_SESSION['mensagen'] = 'Sucesso ao atualizar';  
    }
    header('location:contatos.php');
}