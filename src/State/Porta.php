<?php

namespace State;

use State\Interfaces\StatePorta;
use State\StatePorta\AbertoState;

class Porta
{
	private StatePorta $state;

	public function __construct()
	{
		$this->changeState(new AbertoState($this));
	}

	public function changeState(StatePorta $state)
	{
		$this->state = $state;
	}

	public function abrir()
	{
		$this->state->abrir();
	}

	public function fechar()
	{
		$this->state->fechar();
	}

	public function trancar()
	{
		$this->state->trancar();
	}

	public function destrancar()
	{
		$this->state->destrancar();
	}
}