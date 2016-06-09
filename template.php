<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Estoques</title>
        <meta name="description" content="Estoque">
        <meta name="author" content="Limer Softwares">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="css/skeleton.css" type="text/css" />
        <link rel="stylesheet" href="css/tarefas.css" type="text/css" />

        <link rel="icon" type="image/png" href="images/favicon.png">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div>
                    <h1> Gerenciador de Estoque</h1>
                    <section>
                        <?php include('formulario.php'); ?>
                    </section>
                    <section>
                        <?php if ($exibir_tabela) : ?>
                            <?php include('tabela.php'); ?>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
            <footer>
                <img src="images/logo.png" />
                <p> Desenvolvimento por Limer Softwares </p>
            </footer>
        </div>
    </body>
</html>
