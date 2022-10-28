<?php

namespace State;

use State\Interfaces\StatePorta;
use State\StatePorta\AbertoState;

class Porta_2
{
	private $state;

	public function __construct()
	{
		$this->state = 'aberto';
	}

	public function abrir()
	{
		switch ($this->state) {
			case 'aberto':
				echo 'A porta já está aberta.' . PHP_EOL;
				break;
			case 'fechado':
				echo 'Abrindo a porta.' . PHP_EOL;
				$this->state = 'aberto';
				break;
			case 'trancado':
				echo 'A porta está trancada.' . PHP_EOL;
				break;
		}

	}

	public function fechar()
	{
		switch ($this->state) {
			case 'aberto':
				echo 'Fechando a porta.' . PHP_EOL;
				$this->state = 'fechado';
				break;
			case 'fechado':
				echo 'A porta já está fechada.' . PHP_EOL;
				break;
			case 'trancado':
				echo 'A porta está trancada.' . PHP_EOL;
				break;
		}
	}

	public function trancar()
	{
		switch ($this->state) {
			case 'aberto':
				echo 'A porta não pode ser trancada porque está aberta.' . PHP_EOL;
				break;
			case 'fechado':
				echo 'Trancando a porta.' . PHP_EOL;
				$this->state = 'trancado';
				break;
			case 'trancado':
				echo 'A porta já está trancada.' . PHP_EOL;
				break;
		}
	}

	public function destrancar()
	{
		switch ($this->state) {
			case 'aberto':
				echo 'A porta não pode ser destrancada porque está aberta.' . PHP_EOL;
				break;
			case 'fechado':
				echo 'A porta não está trancada.' . PHP_EOL;
				break;
			case 'trancado':
				echo 'Destrancando a porta.' . PHP_EOL;
				$this->state = 'fechado';
				break;
		}
	}
}