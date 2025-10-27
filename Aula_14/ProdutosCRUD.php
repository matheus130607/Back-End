<?php

namespace Aula_14;
class produtos{

    private $cod_produtos;
    private $nome_produtos;
    private $preco_produtos;

    public function __construct($cod_produtos, $nome_produtos, $preco_produtos){
        $this->cod_produtos = $cod_produtos;
        $this->nome_produtos = $nome_produtos;
        $this->preco_produtos = $preco_produtos;
    }

    public function setCodProdutos($cod_produtos) {
        $this-> cod_produtos = $cod_produtos;
    }

    public function setNomeProdutos($nome_produtos) {
        $this-> nome_produtos = $nome_produtos;
    }

    public function setPrecoProdutos($preco_produtos) {
        $this-> preco_produtos = $preco_produtos;
    }

    public function getCodProdutos() {
        return $this-> cod_produtos;
    }

    public function getNomeProdutos() {
        return $this-> nome_produtos;
    }

    public function getPrecoProdutos() {
        return $this-> preco_produtos;
    }
}

?>