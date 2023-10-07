<?php
use app\Controller\pessoaController;

$url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
$verificacao = ($url == null ? $url = 'home' : $url);

switch($url)
{
    case 'home':
        pessoaController::Home();
        break;
    case 'form/cadastro':
        pessoaController::Form();
        break;
    case 'form/cadastro/save':
        pessoaController::Save();
        break;
    case 'lista/delete':
        pessoaController::Delete();
        break;
    case 'lista':
        pessoaController::Lista();
        break;
    default:
        pessoaController::Error();
        break;
}

?>