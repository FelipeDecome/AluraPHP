<?php

class ICMS implements Imposto
{
    public function calcula(Orcamento $orcamento): int
    {
        return $orcamento->getValue() * 0.05;
    }
}
