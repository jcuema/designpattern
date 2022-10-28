<?php

namespace Visitor;

use Visitor\Interfaces\TaxaVisitor;

abstract class Produto
{
	protected float $margemLucro = 0;

	public function __construct(
		public string $nome,
		public float  $preco
	)
	{
	}

	public function getPreco(): float
	{
		return $this->preco + ($this->preco * $this->margemLucro);
	}

	abstract public function getPrecoComTaxa(TaxaVisitor $visitor): float;
}