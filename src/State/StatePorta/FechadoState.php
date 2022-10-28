<?php

namespace State\StatePorta;

class FechadoState extends BaseStatePorta
{

	public function abrir()
	{
		echo get_called_class(). ': ';
		echo 'Abrindo a porta.' . PHP_EOL;
		$this->contexto->changeState(new AbertoState($this->contexto));
	}

	public function fechar()
	{
		parent::fechar();
		echo get_called_class(). ': ';
		echo 'A porta já está fechada.' . PHP_EOL;
	}

	public function trancar()
	{
		echo get_called_class(). ': ';
		echo 'Trancando a porta.' . PHP_EOL;
		$this->contexto->changeState(new TrancadoState($this->contexto));
	}

	public function destrancar()
	{
		parent::destrancar();
		echo get_called_class(). ': ';
		echo 'A porta não está trancada.' . PHP_EOL;
	}
}