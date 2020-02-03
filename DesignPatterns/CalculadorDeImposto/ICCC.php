<?php

class ICCC implements Imposto
{

    public function calcula(Orcamento $orcamento): int
    {
        if ($orcamento->getValue() < 1000) {
            return $orcamento->getValue() * 0.05;
        } else if ($orcamento->getValue() >= 1000 && $orcamento->getValue() <= 3000) {
            return $orcamento->getValue() * 0.07;
        } else if ($orcamento->getValue() > 3000) {
            return ($orcamento->getValue() * 0.08) + 30;
        }
    }

}
