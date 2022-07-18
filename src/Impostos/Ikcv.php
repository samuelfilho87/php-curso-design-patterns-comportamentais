<?php


namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeDeItens > 3;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}