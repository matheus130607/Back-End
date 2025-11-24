<?php

require_once __DIR__ . '/../Controller/bibliotecaControlller.php';

$controller = new BibliotecaController();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano_publicacao'],
            $_POST['genero'],
            $_POST['qtde']
        );
        header('Location: ' . $_SERVER['PHP_SELF'] . '?msg=cadastrado');
        exit;
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['titulo']);
        header('Location: ' . $_SERVER['PHP_SELF'] . '?msg=excluido');
        exit;
    } elseif ($_POST['acao'] === 'atualizar') {

        $controller->atualizar(
            $_POST['nomeOriginal'],
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano_publicacao'],
            $_POST['genero'],
            $_POST['qtde']
        );
        header('Location: ' . $_SERVER['PHP_SELF'] . '?msg=atualizado');
        exit;
    }
}

$livroParaEditar = null;
if (isset($_POST['acao']) && $_POST['acao'] === 'editar') {
    foreach ($controller->ler() as $livro) {
        if ($livro->getTitulo() === $_POST['titulo']) {
            $livroParaEditar = $livro;
            break;
        }
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somativa - Biblioteca</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        .form-container {
            width: 90%;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-container input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        .btn {
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }

        .btn-editar {
            background: #4a8bff;
        }

        .btn-editar:hover {
            background: #2f6de0;
        }

        .btn-excluir {
            background: #e74c3c;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-excluir:hover {
            background: #c0392b;
        }

        .lista-container {
            width: 95%;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #4a8bff;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f5ff;
        }

        td form {
            display: inline-block;
            margin-right: 5px;
        }

        @media (max-width: 700px) {
            table {
                font-size: 14px;
            }

            .btn {
                padding: 8px;
                font-size: 13px;
            }

            td,
            th {
                padding: 8px;
            }
        }
    </style>
    <h1>Biblioteca Malaman</h1><br>
    <hr>



    <div class="form-container">
        <?php if ($livroParaEditar): ?>
            <h2>Editar Livros</h2>

            <form method="POST">
                <input type="hidden" name="acao" value="atualizar">
                <input type="hidden" name="nomeOriginal" value="<?php echo htmlspecialchars($livroParaEditar->getTitulo()); ?>">

                <label>Titulo:</label>
                <input type="text" name="titulo" placeholder="Titulo" value="<?php echo htmlspecialchars($livroParaEditar->getTitulo()); ?>" required>

                <label>Autor:</label>
                <input type="text" name="autor" placeholder="Autor" value="<?php echo htmlspecialchars($livroParaEditar->getAutor()); ?>" required>

                <label>Ano de Publicação:</label>
                <input type="number" name="ano_publicacao" placeholder="Ano de publicação" value="<?php echo htmlspecialchars($livroParaEditar->getAno_publicacao()); ?>" required>

                <label>Gênero:</label>
                <input type="text" name="genero" placeholder="Gênero" value="<?php echo htmlspecialchars($livroParaEditar->getGenero()); ?>" required>

                <label>Quantidade:</label>
                <input type="number" name="qtde" placeholder="Quantidade" value="<?php echo htmlspecialchars($livroParaEditar->getQtde()); ?>" required>

                <button type="submit" class="btn btn-editar">Atualizar</button>

                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-excluir">Cancelar</a>
            </form>

        <?php else: ?>
            <h2>Cadastrar Novo Livro</h2>
            <form method="POST">
                <input type="hidden" name="acao" value="salvar">

                <input type="text" name="titulo" placeholder="Titulo do Livro:" required>

                <input type="text" name="autor" placeholder="Autor do livro:" required>

                <input type="number" name="ano_publicacao" placeholder="Ano de publicação do Livro:" required>

                <input type="text" name="genero" placeholder="Gênero do livro:" required>

                <input type="number" name="qtde" placeholder="Quantidade de livro:" required>

                <button type="submit" class="btn btn-editar">Cadastrar</button>
            </form>
            <?php if (isset($_GET['msg'])): ?>
                <div id="msgBox" style="
        background: #dff0d8;
        color: #3c763d;
        padding: 12px;
        width: 90%;
        max-width: 500px;
        margin: 15px auto;
        text-align: center;
        border-radius: 8px;
        font-weight: bold;">
                    <?php
                    if ($_GET['msg'] === 'cadastrado') echo "Livro cadastrado com sucesso!";
                    if ($_GET['msg'] === 'atualizado') echo "Livro atualizado com sucesso!";
                    if ($_GET['msg'] === 'excluido')   echo "Livro excluído com sucesso!";
                    ?>
                </div>

                <script>
                    setTimeout(() => {
                        const box = document.getElementById("msgBox");
                        if (box) box.style.display = "none";
                    }, 3000); // 3 segundos
                </script>
            <?php endif; ?>

        <?php endif; ?>
    </div>

    <div class="lista-container">
        <h2>Lista de livros</h2>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Ano de publicação</th>
                    <th>Gênero</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $livro): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($livro->getTitulo()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getAutor()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getAno_publicacao()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getGenero()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getQtde()); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="acao" value="editar">
                                <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                <button type="submit" class="btn btn-editar">Editar</button>
                            </form>
                            <form method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este livro?');">
                                <input type="hidden" name="acao" value="deletar">
                                <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                <button type="submit" class="btn btn-excluir">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>