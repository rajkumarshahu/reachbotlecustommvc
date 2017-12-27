<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=comp1230_fri_10am", "root", "");

}
catch (PDOException $e){
    exit("Error connecting to DB: ".$e->getMessage());
}