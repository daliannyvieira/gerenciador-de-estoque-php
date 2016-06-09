<form method="POST">
    <input type="hidden" name="id" value="<?php echo $estoque['id']; ?>" />
    
    <legend>Novo Produto</legend>
        <label>
            Produto:
            <?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
                <span class="erro"><?php echo $erros_validacao['nome']; ?></span>
            <?php endif; ?>
            <input class="u-full-width" type="text" name="nome" value="<?php echo $estoque['nome']; ?>" />
        </label>
        <label>
            Descrição:
            <textarea class="u-full-width" name="descricao"><?php echo $estoque['descricao']; ?></textarea>
        </label>
    <div class="row">
        <div class="four columns">
        <label>
            Departamento:
            <input class="u-full-width" type="text" name="departamento" value="<?php echo $estoque['departamento']; ?>" />
        </label>
        </div>
        <div class="four columns">
        <label>
            Quantidade:
            <input class="u-full-width" type="number" name="quantidade" value="<?php echo $estoque['quantidade']; ?>" /> 
        </label>
        </div>
        <div class="four columns">
            <input class="button-primary u-full-width" type="submit" value="<?php echo ($estoque['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />
        </div>
    </div>
</form>
