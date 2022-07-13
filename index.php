<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark text-white m-4">
    
<?php

include ('Vendas.php');

$v1 = new Vendas();
$v1->numVenda = 1;
$v1->tipoVenda = 1;
$v1->gerarP();
$v1->calcular();

$v2 = new Vendas();
$v2->numVenda = 2;
$v2->tipoVenda = 0;
$v2->gerarP();
$v2->calcular();

$v3 = new Vendas();
$v3->numVenda = 3;
$v3->tipoVenda = 1;
$v3->gerarP();
$v3->calcular();

$v4 = new Vendas();
$v4->numVenda = 4;
$v4->tipoVenda = 2;
$v4->gerarP();
$v4->calcular();

$v5 = new Vendas();
$v5->numVenda = 5;
$v5->tipoVenda = 0;
$v5->gerarP();
$v5->calcular();

$vendas = [];
$vendas[0] = $v1;
$vendas[1] = $v2;
$vendas[2] = $v3;
$vendas[3] = $v4;
$vendas[4] = $v5;

$aprazo = [];
$avista = [];
$aprazop = [];

for($x=0; $x<5; $x++){
    $tipo = $vendas[$x]->tipoVenda;

    if($tipo == 0){
        array_push($aprazo, $vendas[$x]);
    }

    if($tipo == 1){
        array_push($avista, $vendas[$x]);
    }

    if($tipo == 2){
        array_push($aprazop, $vendas[$x]);
    }
}

function mostraDados($vetor){
    for($i=0; $i<(count($vetor)); $i++){

        $vetor[$i]->mostraVendas();
    }
}

echo '<h1 >Vendas A + FIT:</h1>';
echo '<hr>';
echo '<h2 class="alert alert-light">A Prazo:</h2>';
mostraDados($aprazo);
echo '<br>';

echo '<h2 class="alert alert-light">A Vista:</h2>';
mostraDados($avista);
echo '<br>';

echo '<h2 class="alert alert-light">A Prazo Pagas:<h2>';
mostraDados($aprazop);
echo '<br>';


?>

</body>
</html>