<?php
if(!isset($url[1])){
    die('Invalid access');
}
echo "<p>Model: </p>";
show_source('app/models/'.$url[1].'.php');

echo "<p>View: </p>";
show_source('app/views/'.$url[1].'.phtml');

echo "<p>Controller: </p>";
show_source('app/controllers/controller.php');
die();