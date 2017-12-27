<?php
include "app/config/config.php";

$url = explode("/", $_SERVER['QUERY_STRING']);

print_r($url);
die();

$controller = isset($url[0]) && strlen($url[0]) > 0 ? $url[0] : 'home';

$view = isset($url[1]) && strlen($url[1]) > 0 ? $url[1] : 'index';


echo "Controller = $controller & View = $view";


if(file_exists($config['CONTROLLERS'].$controller.$config['EXT_PHP'])){
    include $config['CONTROLLERS'].$controller.$config['EXT_PHP'];
}
else
{
    echo "Controller $controller was not found";
}