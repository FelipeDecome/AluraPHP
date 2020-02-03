<?php

require_once './Orcamento.php';
require_once './CalculadorDeImposto.php';
require_once './Imposto.php';
require_once './ICMS.php';
require_once './ISS.php';
require_once './ICCC.php';

$orcamento = new Orcamento(10000);

$calculadora = new CalculadorDeImposto();

$icms = $calculadora->calcula($orcamento, new ICMS());
$iss = $calculadora->calcula($orcamento, new ISS());
$iccc = $calculadora->calcula($orcamento, new ICCC());

echo $icms . "<br>" . $iss . "<br>" . $iccc;
