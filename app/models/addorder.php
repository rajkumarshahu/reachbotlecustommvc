<?php
function add_order($db,$session_id){
    $sql1 = "SELECT * FROM `carts` LEFT JOIN `items` ON carts.item_id = items.id WHERE `session_id`='$session_id' order by `item_id` asc";
    //$sql1 = "SELECT * FROM `carts` WHERE `session_id`='$session_id'";
    $items = $db->query($sql1);
    if($items->rowCount()>0){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $name = $fname.' '.$lname;
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $postalcode = $_POST['postalcode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $delivery_schedule = $_POST['delivery_schedule'];
        //populate users table
        $sqlUsers = "SELECT * FROM `users` WHERE `email`='$email'";
        $resultUsers = $db->query($sqlUsers);
        $users = $resultUsers->fetch(PDO::FETCH_ASSOC);
        if($resultUsers->rowCount()>0){
            $user_id = $users['id'];
        }else{
            //insert into users table
            $sqlUserInsert = "INSERT INTO `users`(`name`,`email`,`address1`,`address2`,`postalcode`,`phone`,`is_active`,`is_approved`,`created_at`,`updated_at`) VALUES ('$name','$email','$address1','$address2','$postalcode','$phone','1','1',NOW(),NOW())";
            $db->query($sqlUserInsert);
            $user_id = $db->lastInsertId();
            //$users = $resultUsers->fetch(PDO::FETCH_ASSOC);
            //$user_id = $users['id'];
        }

        //print_r($_POST);die();

        //compute $order_total;
        $order_total = 0;
        $items = $items->fetchAll(PDO::FETCH_ASSOC);
        foreach($items as $item){
            $order_total += $item['qty']*$item['deposit_value'];
        }

        //populate orders table
        $sqlOrders = "INSERT INTO `orders`(`user_id`,`order_date_time`,`delivery_schedule`,`order_total`,`created_at`,`updated_at`) VALUES ('$user_id',NOW(),'$delivery_schedule','$order_total',NOW(),NOW())";
        $db->query($sqlOrders);
        $order_id = $db->lastInsertId();

        //populate user products table
        foreach($items as $item){
            $sqlUserProduct = "INSERT INTO `user_products`(`order_id`,`item_id`,`qty`,`created_at`,`updated_at`) VALUES('$order_id','".$item['id']."','".$item['qty']."',NOW(),NOW())";
            $db->query($sqlUserProduct);
        }


        //delete all records from carts table (session)
        $sqlCarts = "DELETE FROM `carts` WHERE `session_id`='$session_id'";
        $db->query($sqlCarts);


        return true;
    }
    return false;
}

$session_id = session_id();

if($session_id!=''){
    add_order($db,$session_id);
    header('location:thankyou');
    die();
}

header('location:cart');