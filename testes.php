<?php

use ArquiteturaPHP\DesignPattern\CalculadoraDeImpostos;
use ArquiteturaPHP\DesignPattern\Impostos\Icms;
use ArquiteturaPHP\DesignPattern\Impostos\Iss;
use ArquiteturaPHP\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss); 