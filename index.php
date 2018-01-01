<?php
include "app/config/config.php";

$url = explode("/", $_SERVER['QUERY_STRING']);

/*print_r($_SERVER['QUERY_STRING']);
print_r($url);
die();*/

$controller = isset($url[0]) && strlen($url[0]) > 0 ? $url[0] : 'home';

if(file_exists($config['CONTROLLERS'].$controller.$config['EXT_PHP'])){
    include $config['CONTROLLERS'].$controller.$config['EXT_PHP'];
}else{
    echo "Controller $controller was not found";
}