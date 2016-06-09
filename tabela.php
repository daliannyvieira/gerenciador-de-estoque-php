<table>
    <tr>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Departamento</th>
        <th>Quantidade</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_estoques as $estoque) : ?>
        <tr>
            <td>
                <?php echo $estoque['nome']; ?>
            </td>
            <td>
                <?php echo $estoque['descricao']; ?>
            </td>
            <td>
                <?php echo $estoque['departamento']; ?>
            </td>
            <td>
                <?php echo $estoque['quantidade']; ?>
            </td>

            <td>
                <a href="editar.php?id=<?php echo $estoque['id']; ?>">
                    Editar
                </a>
                <a href="remover.php?id=<?php echo $estoque['id']; ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
