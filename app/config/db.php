<?php
try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=reachbottle;", "root", ''); #localhost
#    $db = new PDO("mysql:host=127.0.0.1;dbname=f7933500_comp120_fri_10am;", "f7933500_raj", 'ZI==GB!GlMdO'); #gblearn
    //$db = new PDO("mysql:host=localhost;dbname=f7team8_mydatabase;", "f7team8_admin", '1JrlzF,a?+Z.'); #gblearn
}
catch (PDOException $e){
    exit("Error connecting to DB: ".$e->getMessage());
}