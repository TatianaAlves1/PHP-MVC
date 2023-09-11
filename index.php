<?php

$rota = $_GET['url'] ?? '';
echo var_dump($rota);

switch($rota){
    case '':
        include __DIR__."/src/view/inicio.html";
        break;
    case 'teste01':
        include __DIR__."/src/view/teste01.html";
        break;
    case 'teste02':
        include __DIR__."/src/view/teste02.html";
        break;
    case 'teste03':
        include __DIR__."/src/view/teste03.html";
        break;
    default:
        include __DIR__."/404.html";
        break;
}



