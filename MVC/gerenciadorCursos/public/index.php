<?php

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        require './listar-cursos.php';
    break;
    case '/novo-curso':
        require './formularioNovoCurso.php';
    break;
    default:
    echo 'Erro 404';
break;
}