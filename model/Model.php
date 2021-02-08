<?php
abstract class Model {

    private $codProduto;
    private $nome;
    private $descricao;
    private $categoria;
    private $atributo1;
    private $atributo2;
    private $atributo3;
    private $atributo4;

    public function __construct() {
    }
    public function getCodProduto() {
        return $this->codProduto;
    }

    public function setCodProduto($codProduto) {
        $this->codProduto = $codProduto;

        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;

        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;

        return $this;
    }

    public function getAtributo1() {
        return $this->atributo1;
    }

    public function setAtributo1($atributo1) {
        $this->atributo1 = $atributo1;

        return $this;
    }

    public function getAtributo2() {
        return $this->atributo2;
    }

    public function setAtributo2($atributo2) {
        $this->atributo2 = $atributo2;

        return $this;
    }

    public function getAtributo3() {
        return $this->atributo3;
    }

    public function setAtributo3($atributo3) {
        $this->atributo3 = $atributo3;

        return $this;
    }

    public function getAtributo4() {
        return $this->atributo4;
    }

    public function setAtributo4($atributo4) {
        $this->atributo4 = $atributo4;

        return $this;
    }
}