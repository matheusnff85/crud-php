<?php
require_once 'core/core.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'administrator';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';
$c .= 'Controller';

if(file_exists('controllers/' . $c . '.php')){
    require_once 'controllers/' . $c . '.php';
    if(method_exists($c, $m)){
        $c = new $c;
        call_user_func([$c,$m]);
    }else{
        die("Erro : O método ou função [{$m}()] não existe");
    }    
}else{
    die("Erro : O Controller [{$c}] não existe.");
}