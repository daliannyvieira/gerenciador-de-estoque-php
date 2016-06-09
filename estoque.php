<?php

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = array();

if (tem_post()) {
    $estoque = array();

    if (isset($_POST['nome']) && strlen($_POST['nome']) > 0) {
        $estoque['nome'] = $_POST['nome'];
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome do produto é obrigatório!';
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
        gravar_estoque($conexao, $estoque);
        header('Location: estoque.php');
        die();
    }
}

$lista_estoques = buscar_estoques($conexao);

$estoque = array(
    'id'         => 0,
    'nome'       => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'descricao'  => (isset($_POST['descricao'])) ? $_POST['descricao'] : '',
    'departamento'      => (isset($_POST['departamento'])) ? $_POST['departamento'] : '',
    'quantidade' => (isset($_POST['quantidade'])) ? $_POST['quantidade'] : ""
);

include "template.php";
