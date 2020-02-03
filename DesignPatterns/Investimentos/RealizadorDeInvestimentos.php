<?php

class RealizadorDeInvestimentos
{
    public function realiza(Conta $conta, Investimento $investimento): int
    {
        $resultado = $investimento->calcula($conta);

        $conta->deposita($resultado * 0.75);
        return $conta->getSaldo();
    }
}
