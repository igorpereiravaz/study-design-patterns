<?php

namespace ArquiteturaPHP\DesignPattern\Impostos;

use ArquiteturaPHP\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto (Orcamento $orcamento)
    {
        return $orcamento->valor * 0.06;
    }
}