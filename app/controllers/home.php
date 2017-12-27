<?php
/**
 * Created by PhpStorm.
 * User: 101034082
 * Date: 22/12/2017
 * Time: 11:22 AM
 */

if(file_exists($config['MODELS'].$controller.$config['EXT_PHP'])){
    include $config['MODELS'].$controller.$config['EXT_PHP'];
}

if($view == "index"){

    print "You are in the index view inside of the controller";
}