<?php

require __DIR__ . './../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        require './formularioNovoCurso.php';
        break;
    default:
        echo 'Erro 404';
        break;
}