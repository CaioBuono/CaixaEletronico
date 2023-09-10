<?php

class SomaBanco
{
    private $saque;

    public function __construct(float $saque)
    {
        $this->saque = $saque;
    }

    public function retornarSaque() : float
    {
        return $this->saque;
    }

    public function mostrarSaque() : void
    {
        echo number_format($this->saque,2,',','.');
    }

    public function retornarNotaCem() : float
    {
        return $this->saque / 100;
    }

    public function retornarNotaCinquenta() : float
    {
        return $this->saque % 100 / 50;
    }

    public function retornarNotaDez() : float
    {
        return $this->saque % 50 / 10;
    }

    public function retornarNotaCinco() : float
    {
        return $this->saque % 10 / 5;
    }
}