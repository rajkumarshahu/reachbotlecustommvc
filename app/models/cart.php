<?php


function get_all_cart_items($db,$session_id){
    $sql = "SELECT * FROM `carts` LEFT JOIN `items` ON carts.item_id = items.id WHERE `session_id`='$session_id' order by `item_id` asc";
    $carts = $db->query($sql);
    return $carts;
}

$session_id = session_id();
$carts = get_all_cart_items($db,$session_id);