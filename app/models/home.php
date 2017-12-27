<?php

function get_all_items($db){
    $sql = "SELECT * FROM `items` WHERE `is_active`='1' order by `id` asc";
    $items = $db->query($sql);
    return $items;
}

$items = get_all_items($db);

/*foreach($items as $item){
    print_r($item);
}*/