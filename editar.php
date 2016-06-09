<?php

session_start();

include "banco.php";
include "ajudantes.php";

$exibir_tabela = false;
$tem_erros = false;
$erros_validacao = array();

if (tem_post()) {
    $estoque = array();

    $estoque['id'] = $_POST['id'];

    if (isset($_POST['nome']) && strlen($_POST['nome']) > 0) {
        $estoque['nome'] = $_POST['nome'];
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da estoque é obrigatório!';
    }

    if (isset($_POST['descricao'])) {
        $estoque['descricao'] = $_POST['descricao'];
    } else {
        $estoque['descricao'] = '';
    }

    if (isset($_POST['departamento'])) {
        $estoque['departamento'] = $_POST['departamento'];
    } else {
        $estoque['departamento'] = '';
    }

    if (isset($_POST['quantidade'])) {
        $estoque['quantidade'] = $_POST['quantidade'];
    } else {
        $estoque['quantidade'] = '';
    }

    if (! $tem_erros) {
        editar_estoque($conexao, $estoque);
        header('Location: estoque.php');
        die();
    }
}

$estoque = buscar_estoque($conexao, $_GET['id']);

$estoque['nome'] = (isset($_POST['nome'])) ? $_POST['nome'] : $estoque['nome'];
$estoque['descricao'] = (isset($_POST['descricao'])) ? $_POST['descricao'] : $estoque['descricao'];
$estoque['departamento'] = (isset($_POST['departamento'])) ? $_POST['departamento'] : $estoque['departamento'];
$estoque['quantidade'] = (isset($_POST['quantidade'])) ? $_POST['quantidade'] : $estoque['quantidade'];

include "template.php";
