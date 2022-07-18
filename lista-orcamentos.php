<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeDeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeDeItens = 3;
$orcamento2->aprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeDeItens = 5;
$orcamento3->aprova();
$orcamento3->valor = 1350;

$listaOrcamentos = new ListaDeOrcamentos();

$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual)  . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeDeItens  . PHP_EOL;

    echo PHP_EOL;
}