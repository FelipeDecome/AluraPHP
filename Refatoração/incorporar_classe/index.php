<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Telefone.php';
require 'Usuario.php';

$contato = new Contato(
    'Rua Vergueiro 3185',
    '04101-300'
);

$telefone = new Telefone(
    '11',
    '5571-2751',
    'comercial'
);

$usuario = new Usuario('Giovanni', 'Tempobono', $contato, $telefone);

echo "<p>{$usuario->getNome()}</p>";
echo "<p>{$usuario->getTelefoneDdd()}</p>";
echo "<p>{$usuario->getEnderecoECep()}</p>";
