<?php 

namespace ArquiteturaPHP\DesignPattern;

use ArquiteturaPHP\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula (Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}