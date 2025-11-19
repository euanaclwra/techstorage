<?php
class Produto {
    // Atributos
    private $nome;
    private $codigoBarras;
    private $qtdEstoque;
    private $custoReposicao;
    private $descricao;

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodigoBarras() {
        return $this->codigoBarras;
    }

    public function setCodigoBarras($codigoBarras) {
        $this->codigoBarras = $codigoBarras;
    }

    public function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    public function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getCustoReposicao() {
        return $this->custoReposicao;
    }

    public function setCustoReposicao($custoReposicao) {
        $this->custoReposicao = $custoReposicao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Construtor
    public function __construct($nome, $codigoBarras, $qtdEstoque, $custoReposicao, $descricao) {
        $this->nome = $nome;
        $this->codigoBarras = $codigoBarras;
        $this->qtdEstoque = $qtdEstoque;
        $this->custoReposicao = $custoReposicao;
        $this->descricao = $descricao;
    }
}
?>