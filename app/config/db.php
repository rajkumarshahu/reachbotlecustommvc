<?php
/**
 * Created by PhpStorm.
 * User: 101034082
 * Date: 22/12/2017
 * Time: 11:12 AM
 */

try {
    $db = new PDO("mysql:host=localhost;dbname=comp1230_fri_10am", "root", "");

}
catch (PDOException $e){
    exit("Error connecting to DB: ".$e->getMessage());
}