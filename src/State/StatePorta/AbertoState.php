<?php

namespace State\StatePorta;

use State\Interfaces\StatePorta;

class AbertoState extends BaseStatePorta
{
	public function abrir()
	{
		parent::abrir();
		echo get_called_class(). ': ';
		echo 'A porta já está aberta.' . PHP_EOL;
	}

	public function fechar()
	{
		echo get_called_class(). ': ';
		echo 'Fechando a porta.' . PHP_EOL;
		$this->contexto->changeState(new FechadoState($this->contexto));
	}

	public function trancar()
	{
		parent::trancar();
		echo get_called_class(). ': ';
		echo 'Uma porta aberta não pode ser trancada.' . PHP_EOL;
	}

	public function destrancar()
	{
		parent::destrancar();
		echo get_called_class(). ': ';
		echo 'Uma porta aberta não pode ser destrancada.' . PHP_EOL;
	}
}