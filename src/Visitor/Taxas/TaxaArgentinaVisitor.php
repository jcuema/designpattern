<?php

namespace Visitor\Taxas;

use Visitor\Bebida;
use Visitor\Cigarro;
use Visitor\Comida;
use Visitor\Interfaces\TaxaVisitor;

class TaxaArgentinaVisitor implements TaxaVisitor
{

	public function TaxaComida(Comida $comida): float
	{
		return $comida->getPreco() + ($comida->getPreco() * 1.1);
	}

	public function TaxaBebida(Bebida $bebida): float
	{
		return $bebida->getPreco() + ($bebida->getPreco() * 0.4);
	}

	public function TaxaCigarro(Cigarro $cigarro): float
	{
		return $cigarro->getPreco() + ($cigarro->getPreco() * 0.3);
	}
}