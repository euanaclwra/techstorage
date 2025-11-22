<?php
class SysConfig {
    // Atributos
    private $qtdMinima

    // Getters e Setters
    public function getQtdMinima() {
        return $this->qtdMinima;
    }

    public function setQtdMinima($qtdMinima) {
        $this->id = $qtdMinima;
    }   
    
    // Construtor
    public function __construct($qtdMinima = null) {
        $this->qtdMinima = $qtdMinima;       
    }    
}
?>