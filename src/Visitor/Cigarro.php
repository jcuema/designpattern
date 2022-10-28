<?php

namespace Visitor;

use Visitor\Interfaces\TaxaVisitor;

class Cigarro extends Produto
{
	public function __construct(public float $preco)
	{
		$this->margemLucro = 0.4;
		parent::__construct('Cigarro', $preco);
	}

	public function getPrecoComTaxa(TaxaVisitor $visitor): float
	{
		return $visitor->TaxaCigarro($this);
	}
}