<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $quant;
    public $calcvalor;
    public $valorTotal;

    public function valorCalc(){
        $valor = $this->valor;
        $quant = $this->quant;
        $this->valorTotal = $valor * $quant;
    }
}
?>