<?php

class Conservador implements Investimento
{
    public function calcula(Conta $conta): int
    {
        return $conta->getSaldo() * 0.008;
    }
}
