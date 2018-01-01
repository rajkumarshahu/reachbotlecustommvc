<?php
function delete_cart_item($db,$session_id,$item_id){
    $sql = "DELETE FROM `carts` WHERE `session_id`='$session_id' AND `item_id`='$item_id'";
    $db->query($sql);
}

$item_id = isset($url[1]) && strlen($url[1]) > 0 ? $url[1] : '';
if($item_id>0){
    $session_id = session_id();
    delete_cart_item($db,$session_id,$item_id);
    header('location: '.$site_url.'cart');
    die();
}
header('location:'.$site_url.'home');