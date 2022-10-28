<?php

namespace Visitor;

use Visitor\Interfaces\TaxaVisitor;

class Bebida extends Produto
{
	public function __construct(public float $preco)
	{
		$this->margemLucro = 0.3;
		parent::__construct('Bebida', $preco);
	}

	public function getPrecoComTaxa(TaxaVisitor $visitor): float
	{
		return $visitor->TaxaBebida($this);
	}
}