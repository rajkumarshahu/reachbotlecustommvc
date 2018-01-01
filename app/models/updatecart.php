<?php
function add_to_cart($item_id,$qty){
    global $db;
    //add item to cart
    $session_id = session_id();

    $sql1 = "SELECT * FROM `carts` WHERE `session_id`='$session_id' AND `item_id`='$item_id'";
    $items = $db->query($sql1);
    if($items->rowCount()>0){
        $sql2 = "UPDATE `carts` SET `qty` = '$qty',`updated_at`=NOW() WHERE `session_id`='$session_id' AND `item_id`='$item_id'";
        $db->query($sql2);
    }else{
        $sql = "INSERT INTO `carts`(`session_id`,`item_id`,`qty`,`created_at`,`updated_at`) VALUES ('$session_id','$item_id','$qty',NOW(),NOW())";
        $db->query($sql);
    }
}

if(isset($_POST['item_id']) && $_POST['item_id']>0 && isset($_POST['qty']) && $_POST['qty']>0){
    $item_id = $_POST['item_id'];
    $qty = $_POST['qty'];
    add_to_cart($item_id,$qty);
    header('location:cart');
    die();
}else{
    $item_id = 0;
    $qty = 0;
}

header('location:home');