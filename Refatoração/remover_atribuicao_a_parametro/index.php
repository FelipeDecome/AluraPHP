<?php declare (strict_types = 1);

function recebeDesconto(int $descontoInicial, bool $ehPremium, int $quantidade, int $anosCliente): void
{
    $descontoFinal = $descontoInicial;

    if ($descontoFinal > 200) {
        return;
    }

    if ($ehPremium === true) {
        $descontoFinal = $descontoFinal * 1.1;
    }

    if ($quantidade > 50) {
        $descontoFinal = $descontoFinal * 1.2;
    }

    if ($anosCliente > 3) {
        $descontoFinal = $descontoFinal * 1.1;
    }

    echo <<<EOF
--------------------
Desconto: $descontoInicial
Desconto: $descontoFinal
--------------------
EOF;
}

recebeDesconto(50, true, 100, 100);
