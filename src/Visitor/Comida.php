<?php

namespace Visitor;

use Visitor\Interfaces\TaxaVisitor;

class Comida extends Produto
{
	public function __construct(public float $preco)
	{
		$this->margemLucro = 0.2;
		parent::__construct('Comida', $preco);
	}

	public function getPrecoComTaxa(TaxaVisitor $visitor): float
	{
		return $visitor->TaxaComida($this);
	}
}