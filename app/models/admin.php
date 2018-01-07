<?php
function get_all_orders($db){
    $sqlOrders = "SELECT *,orders.id as order_id FROM `orders` LEFT JOIN `users` ON orders.user_id = users.id order by orders.`id` desc";
    $resultOrders = $db->query($sqlOrders);

    $order_information = null;

    if($resultOrders->rowCount()>0) {
        $orders = $resultOrders->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        foreach ($orders as $order) {
            $order_id = $order['order_id'];
            $order_information[$i]['order'] = $order;
            $sqlUserProducts = "SELECT * FROM `user_products` LEFT JOIN `items` ON `user_products`.`item_id` = `items`.`id` WHERE `order_id`='$order_id'";
            $resultUserProducts = $db->query($sqlUserProducts);
            $order_information[$i]['items'] = $resultUserProducts->fetchAll(PDO::FETCH_ASSOC);
            $i++;
        }
    }
    return $order_information;
}
$order_information = get_all_orders($db);


