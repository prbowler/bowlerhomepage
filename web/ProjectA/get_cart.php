<?php

function getCart($db, $shopperID) {
    try {
        $query = 'SELECT * FROM cart WHERE shopperid = '.$shopperID.'';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($carts);
        if(sizeof($carts !== 0)) {
            $cart = $carts[0]['id'];
        } else {
            $cart = 0;
        }
        //var_dump($cart);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
    if (is_null($cart) || $cart === 0) {
        $cart = newCart($db, $shopperID);
    }
    return $cart;
}

function newCart($db, $shopperID) {
    $query = 'INSERT INTO cart(shopperid) VALUES (:shopperid) RETURNING id';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':shopperid', $shopperID, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $cart = $result['id'];
    return $cart;
}