<?php

namespace State\StatePorta;

use State\Interfaces\StatePorta;
use State\Porta;

abstract class BaseStatePorta implements StatePorta
{
	public function __construct(protected Porta $contexto)
	{
	}

	public function abrir()
	{
		echo get_called_class() . ': ';
		echo 'A porta não pode ser aberta.' . PHP_EOL;
	}

	public function fechar()
	{
		echo get_called_class() . ': ';
		echo 'A porta não pode ser fechada' . PHP_EOL;
	}

	public function trancar()
	{
		echo get_called_class() . ': ';
		echo 'A porta não pode ser trancada.' . PHP_EOL;
	}

	public function destrancar()
	{
		echo get_called_class() . ': ';
		echo 'A porta não pode ser destrancada.' . PHP_EOL;
	}
}