<?php

require_once 'vendor/autoload.php';

$comida = new Visitor\Comida(10);
$cigarro = new Visitor\Cigarro(15);
$refrigerante = new Visitor\Bebida(8);

$carrinho = [
	$comida,
	$cigarro,
	$refrigerante,
];

$total = 0;
$total_brasil = 0;
$total_argentina = 0;

$taxaBrasil = new Visitor\Taxas\TaxaBrasilVisitor();
$taxaArgentina = new Visitor\Taxas\TaxaArgentinaVisitor();

foreach ($carrinho as $item) {
	$total +=$item->getPreco();
	$total_brasil += $item->getPrecoComTaxa($taxaBrasil);
	$total_argentina += $item->getPrecoComTaxa($taxaArgentina);
}

echo "Sem Taxas.....: " . $total . PHP_EOL;
echo "Taxa Brasil...: " . $total_brasil . PHP_EOL;
echo "Taxa Argentina: " . $total_argentina . PHP_EOL;