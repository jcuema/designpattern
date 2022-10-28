<?php

namespace State\StatePorta;

class TrancadoState extends BaseStatePorta
{

	public function abrir()
	{
		parent::abrir();
		echo get_called_class(). ': ';
		echo 'A porta está trancada.' . PHP_EOL;
	}

	public function fechar()
	{
		parent::fechar();
		echo get_called_class(). ': ';
		echo 'A porta está fechada e trancada.' . PHP_EOL;
	}

	public function trancar()
	{
		parent::trancar();
		echo get_called_class(). ': ';
		echo 'A porta já está trancada.' . PHP_EOL;
	}

	public function destrancar()
	{
		echo get_called_class(). ': ';
		echo 'Destrancando a porta.' . PHP_EOL;
		$this->contexto->changeState(new FechadoState($this->contexto));
	}
}