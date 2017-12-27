<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=reachbottle", "root", "");

}
catch (PDOException $e){
    exit("Error connecting to DB: ".$e->getMessage());
}