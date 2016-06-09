<?php

include "banco.php";

remover_estoque($conexao, $_GET['id']);

header('Location: estoque.php');
