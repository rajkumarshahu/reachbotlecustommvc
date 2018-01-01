<?php
session_start();

include 'db.php';

define("DS", DIRECTORY_SEPARATOR);

define("APP","app".DS);

$config=[
'DB'=>$db,
'CONTROLLERS' =>APP."controllers".DS,
'MODELS' =>APP."models".DS,
'VIEWS' =>APP."views".DS,
'EXT_PHP'=>".php",
'EXT_PHTML'=>'.phtml',
];

$assets_dir = $config['VIEWS'].'assets'.DS;
$site_url = '/reach_bottle/';