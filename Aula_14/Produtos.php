<?php

namespace Aula_14;

require_once "ProdutosCRUD.php";
require_once "ProdutosDAO.php";

$dao = new ProdutosDAO();

//Create
$dao -> criarProdutos (new produtos(1, "Tomate", 4.99));
$dao -> criarProdutos (new produtos(2, "Maça", 3.76));
$dao -> criarProdutos (new produtos(3, "Queijo  brie", 12.97));
$dao -> criarProdutos (new produtos(4, "Iorgurte gregp", 9.54));
$dao -> criarProdutos (new produtos(5, "Guaraná Jesus", 6.87));
$dao -> criarProdutos (new produtos(6, "Bolacha Bono", 3.57));
$dao -> criarProdutos (new produtos(7, "Desinfetante Urca", 18.38));
$dao -> criarProdutos (new produtos(8, "Prestobarba Bic.", 21.13));

// READ
echo "\n Lista de produtos:\n";
foreach ($dao->lerProdutos() as $produto) {
    echo "Cód: {$produto->getCodProdutos()} - Nome: {$produto->getNomeProdutos()} - Preço: R$ {$produto->getPrecoProdutos()}" . PHP_EOL;
}

// UPDATE
$dao->atualizarProdutos(7, "Desinfetante Barbarex", 2.12);


// DELETE
$dao-> excluirProdutos(1);
$dao-> excluirProdutos(2);

echo "\n Após exclusão: \n";
foreach ($dao->lerProdutos() as $produto) {
    echo "Cód: {$produto->getCodProdutos()} - Nome: {$produto->getNomeProdutos()} - Preço: R$ {$produto->getPrecoProdutos()}" . PHP_EOL;
}