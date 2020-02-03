<?php

class CalculadorDeImposto
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): int
    {
        return $imposto->calcula($orcamento);
    }
}
