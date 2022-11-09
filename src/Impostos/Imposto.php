<?php

namespace ArquiteturaPHP\DesignPattern\Impostos;

use ArquiteturaPHP\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento);
}