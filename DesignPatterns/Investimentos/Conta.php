<?php
class Conta
{

    private $saldo;

    public function deposita(int $valor): int
    {
        $this->saldo += valor;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }
}
