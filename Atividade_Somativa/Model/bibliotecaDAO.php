<?php

require_once 'biblioteca.php';
require_once 'bibliotecaConnection.php';

class BibliotecaDAO {

    private $conn;

    public function __construct() {
        $this -> conn = Connection::getInstance();

        $this -> conn -> exec(
            "CREATE TABLE IF NOT EXISTS livro (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(200) NOT NULL,
                autor VARCHAR(200) NOT NULL,ano_publicacao YEAR NOT NULL,
                genero VARCHAR(50) NOT NULL,qtde INT NOT NULL
            )
        ");
    }

    // CREATE

    public function criarLivro(Livro $livro) {

        $stmt = $this -> conn -> prepare ("
        INSERT INTO livro (titulo, autor, ano_publicacao, genero, qtde) VALUES (:titulo, :autor, :ano_publicacao, :genero, :qtde)
        ");

        $stmt -> execute( [
            ':titulo' => $livro -> getTitulo(),
            ':autor' => $livro -> getAutor(),
            ':ano_publicacao' => $livro -> getAno_publicacao(),
            ':genero' => $livro -> getGenero(),
            ':qtde' => $livro -> getQtde(),
        ]);
    }

    //READ
    public function lerLivro() {
        $stmt = $this -> conn -> query("SELECT * FROM livro ORDER BY titulo");
        $result = [];
        
        while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano_publicacao'],
                $row['genero'],
                $row['qtde']
            );
        }
        return $result;
    }

    //UPDATE
    public function atualizarLivro($nomeOriginal, $novoTitulo, $autor, $ano_publicacao, $genero, $qtde) {
        $stmt = $this -> conn -> prepare ("
            UPDATE livro
            SET titulo = :novoTitulo, autor = :autor, ano_publicacao = :ano_publicacao, genero = :genero, qtde = :qtde
            WHERE titulo = :nomeOriginal 
    ");

        $stmt -> execute([
            ':novoTitulo' => $novoTitulo,
            ':autor' => $autor,
            ':ano_publicacao' => $ano_publicacao,
            ':genero' => $genero,
            ':qtde' => $qtde,
            ':nomeOriginal' => $nomeOriginal
        ]);
    }

    //DELETE
    public function excluirLivro($titulo) {
        $stmt = $this -> conn -> prepare("DELETE FROM livro WHERE titulo = :titulo");
        $stmt -> execute([':titulo' => $titulo]);
    }

    // BUSCAR POR NOME
    public function buscarPorTitulo($titulo) {
        $stmt = $this -> conn -> prepare("SELECT * FROM livro WHERE titulo = :titulo LIMIT 1");
        $stmt -> execute([':titulo' => $titulo]);
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        if($row) {
            return new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano_publicacao'],
                $row['genero'],
                $row['qtde']
            );
        }
        return null;
    }



}

