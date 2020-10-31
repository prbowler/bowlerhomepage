<?php
require "connect-db-ol.php";
include "banner.php";

$cart = htmlspecialchars($_POST['cart_id']);
$shopperID = htmlspecialchars($_POST['shopper_id']);
$cardNumber = htmlspecialchars($_POST['card_number']);


if ($cardNumber !== '' && $shopperID !== '') {
    $cardID = addCard($db, $cardNumber, $shopperID);
    addOrder($db, $cart);
    addCheckout($db, $cartID, $cardID);
    echo "Purchase complete<br>";
}

echo "<br><a href='home.php'>Return Home</a>";
die();

function addCard($db, $cardNumber, $shopperID) {
    $query = 'INSERT INTO card(number, shopperid) VALUES (:number, :shopperid) RETURNING id';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':number', $cardNumber, PDO::PARAM_INT);
    $stmt->bindValue(':shopperid', $shopperID, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $cardID = $result['id'];
    return $cardID;
}

function addOrder($db, $cart) {
    $query = 'UPDATE cart SET ordered = TRUE WHERE id = :cartid';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':cartid', $cart, PDO::PARAM_INT);
    $stmt->execute();
}

function addCheckout($db, $cartID, $cardID ) {
    $query = 'INSERT INTO checkout(cartid, cardid) VALUES (:cartid, :cardid)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':cartid', $cartID, PDO::PARAM_INT);
    $stmt->bindValue(':cardid', $cardID, PDO::PARAM_INT);
    $stmt->execute();
}