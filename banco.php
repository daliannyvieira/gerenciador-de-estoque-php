<?php

$bdServidor = 'localhost';
$bdUsuario = 'sistema';
$bdSenha = 'sistema';
$bdBanco = 'estoques';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_estoques($conexao)
{
    $sqlBusca = 'SELECT * FROM estoques';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $estoques = array();

    while ($estoque = mysqli_fetch_assoc($resultado)) {
        $estoques[] = $estoque;
    }

    return $estoques;
}

function buscar_estoque($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM estoques WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function gravar_estoque($conexao, $estoque)
{
    $sqlGravar = "
        INSERT INTO estoques
        (nome, descricao, departamento, quantidade)
        VALUES
        (
            '{$estoque['nome']}',
            '{$estoque['descricao']}',
            '{$estoque['departamento']}',
            '{$estoque['quantidade']}'
        )
    ";

    mysqli_query($conexao, $sqlGravar);
}

function editar_estoque($conexao, $estoque)
{
    $sqlEditar = "
        UPDATE estoques SET
            nome = '{$estoque['nome']}',
            descricao = '{$estoque['descricao']}',
            departamento = '{$estoque['departamento']}',
            quantidade = '{$estoque['quantidade']}'
        WHERE id = {$estoque['id']}
    ";

    mysqli_query($conexao, $sqlEditar);
}

function remover_estoque($conexao, $id)
{
    $sqlRemover = "DELETE FROM estoques WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}
