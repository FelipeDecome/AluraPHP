<?php

class ISS implements Imposto
{
    public function calcula(Orcamento $orcamento): int
    {
        return $orcamento->getValue() * 0.06;
    }
}
