<?php

require_once __DIR__ . '/../Controller/bibliotecaControlller.php';

$controller = new BibliotecaController();


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['acao'] === 'salvar') {
            $controller -> criar(
                $_POST['titulo'],
                $_POST['autor'],
                $_POST['ano_publicacao'],
                $_POST['genero'],
                $_POST['qtde'],
            );
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } elseif ($_POST['acao'] === 'deletar') {$controller ->
        deletar($_POST['titulo']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } elseif ($_POST['acao'] === 'atualizar') {

        $controller -> atualizar(
            $_POST['nomeOriginal'],
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano_publicacao'],
            $_POST['genero'],
            $_POST['qtde'],
        );
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

    $livroParaEditar = null;
    if(isset($_POST['acao']) && $_POST['acao'] === 'editar') {
        foreach($controller -> ler() as $livro) {
            if($livro ->getNome() === $_POST['titulo']) {
                $livroParaEditar = $livro;
                break;
            }
        }
    }

    $lista = $controller -> ler();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Somativa - Biblioteca</title>
    </head>
    <body>
        <h1>Biblioteca Malaman</h1><br><hr>

        <div class="form-container">
            <?php if ($livroParaEditar): ?>
        <h2>Editar Livros</h2>

        <form method="POST">
            <input type="hidden" name="acao" value="atualizar">
            <input type="hidden" name="nomeOriginal" value="<?php echo htmlspecialchars($livroParaEditar -> getTitulo()); ?>">
            
            <label>Titulo:</label>
            <input type="text" name="titulo" placeholder="Titulo" value="<?php echo htmlspecialchars($livroParaEditar -> getTitulo()); ?>" required>

            <label>Autor:</label>
            <input type="text" name="autor" placeholder="Autor" value="<?php echo htmlspecialchars($livroParaEditar -> getAutor()); ?>" required>

            <label>Ano de Publicação:</label>
            <input type="number" name="ano_publicacao" placeholder="Ano de publicação" value="<?php echo htmlspecialchars($livroParaEditar -> getAno_publicacao()); ?>" required>

            <label>Gênero:</label>
            <input type="text" name="genero" placeholder="Gênero" value="<?php echo htmlspecialchars($livroParaEditar -> getGenero()); ?>" required>

            <label>Quantidade:</label>
            <input type="number" name="qtde" placeholder="Quantidade" value="<?php echo htmlspecialchars($livroParaEditar -> getQtde()); ?>" required>

            <button type="submit" class="btn btn-editar">Atualizar</button>

            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-excluir">Cancelar</a>
        </form>

        <?php else: ?>
            <h2>Cadastrar Novo Livro</h2>
            <form method="POST">

            </form>
        </div>
    </body>
    </html>