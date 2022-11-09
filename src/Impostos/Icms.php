<?php

namespace ArquiteturaPHP\DesignPattern\Impostos;

use ArquiteturaPHP\DesignPattern\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto (Orcamento $orcamento)
    {
        return $orcamento->valor * 0.1;
    }
}