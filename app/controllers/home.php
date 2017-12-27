<?php
if(file_exists($config['MODELS'].$controller.$config['EXT_PHP'])){
    include $config['MODELS'].$controller.$config['EXT_PHP'];
}

if($view == "index"){

    print "You are in the index view inside of the controller";
}