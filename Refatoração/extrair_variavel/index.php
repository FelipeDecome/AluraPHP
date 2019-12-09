<?php declare (strict_types = 1);

function verificaSeEmailEhValido(): string
{
    $mail = $_GET['email'];
    $successMsg = "O seu e-mail é: " . $mail;
    $errMsg = "O seu e-mail não é válido";

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return $successMsg;
    } else {
        return $errMsg;
    }   
}

echo verificaSeEmailEhValido();
