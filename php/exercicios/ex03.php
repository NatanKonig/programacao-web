<?php 

$precoProduto = 20.90;
$descontoPorcentagem = 5;
$valorDesconto = $precoProduto * ($descontoPorcentagem / 100);
$precoProdutoFinal = $precoProduto - $valorDesconto;

echo "O valor do produto com desconto de $descontoPorcentagem% é R$ $precoProdutoFinal";

?>