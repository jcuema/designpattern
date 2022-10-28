<?php

namespace Visitor\Interfaces;

use Visitor\Bebida;
use Visitor\Cigarro;
use Visitor\Comida;

interface TaxaVisitor
{
	public function TaxaComida(Comida $comida): float;
	public function TaxaBebida(Bebida $bebida): float;
	public function TaxaCigarro(Cigarro $cigarro): float;
}