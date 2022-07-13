<?php
include ('Produtos.php');

class Vendas{
    public $produto;
    public $numVenda;
    public $valorUn;
    public $valor;
    public $tipoVenda;
    
     public function calcular(){
        $valor = 0;
        for($x=0; $x<=2; $x++){
            $this->valor = $this->produto[$x]->valorTotal + $this->valor;
        }
    }

    public function gerarP(){
        $p1 = new Produtos();
        $p1->id = 1;
        $p1->nome = 'Whey';
        $p1->valor = 200;
        $p1->quant = 1;
        $p1->valorCalc();
        
        $p2 = new Produtos();
        $p2->id = 2;
        $p2->nome = 'Creatina';
        $p2->valor = 100;
        $p2->quant = 2;
        $p2->valorCalc();

        $p3 = new Produtos();
        $p3->id = 2;
        $p3->nome = 'Academia';
        $p3->valor = 90;
        $p3->quant = 1;
        $p3->valorCalc();

        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
        $this->produto[2] = $p3;
    }

    public function mostraVendas(){

        echo '<table class="table table-dark table-borderless"<tr >
        <td scope="col"><b><u>Venda - '.$this->numVenda.' </b></u></td>
        <td scope="col"><b><u>Nome </b></u></td>
        <td scope="col"><b><u>Valor </b></u></td>
        <td scope="col"><b><u>Quantidade </b></u></td>
        <td scope="col"><b><u>Valor Total </b></u></td>
        </tr>';

        for($x=0; $x<(count($this->produto)); $x++){
            echo '<tr><td></td><td>'.$this->produto[$x]->nome.'</td>';
            echo '<td>'.$this->produto[$x]->valor.'</td>';
            echo '<td>'.$this->produto[$x]->quant.'</td>';
            echo '<td>'.$this->produto[$x]->valorTotal.'</td> </tr>';
            
        }
        
        
    }

}

?>