<?php
function getCart($db, $shopperID) {
    error_log("getCart",0);
    try {
        $query = 'SELECT * FROM cart WHERE shopperid = '.$shopperID.'';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($carts);
        if(sizeof($carts !== 0)) {
            $cart = $carts[0]['id'];
        } else {
            $cart = 0;
        }
        var_dump($cart);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    return $cart;
}