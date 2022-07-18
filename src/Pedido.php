<?php


namespace Alura\DesignPattern;


class Pedido
{

    public \DateTimeImmutable $dataFinalizacao;
    public string $nomeCliente;
    public Orcamento $orcamento;
}