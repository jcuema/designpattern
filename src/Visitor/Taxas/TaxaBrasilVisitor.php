<?php

namespace Visitor\Taxas;

use Visitor\Bebida;
use Visitor\Cigarro;
use Visitor\Comida;
use Visitor\Interfaces\TaxaVisitor;

class TaxaBrasilVisitor implements TaxaVisitor
{

	public function TaxaComida(Comida $comida): float
	{
		return $comida->getPreco() + ($comida->getPreco() * 0.02);
	}

	public function TaxaBebida(Bebida $bebida): float
	{
		return $bebida->getPreco() + ($bebida->getPreco() * 0.3);
	}

	public function TaxaCigarro(Cigarro $cigarro): float
	{
		return $cigarro->getPreco() + ($cigarro->getPreco() * 0.7);
	}
}