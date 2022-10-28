<?php

namespace State\Interfaces;

interface StatePorta
{
	public function abrir();
	public function fechar();
	public function trancar();
	public function destrancar();
}