<?php
require "connect-db-ol.php";
include "banner.php";

$cart = htmlspecialchars($_POST['cart_id']);
$shopperID = htmlspecialchars($_POST['shopper_id']);
$cardNumber = htmlspecialchars($_POST['card_number']);


if ($cardNumber !== '' && $shopperID !== '') {
    addCard($db, $cardNumber, $shopperID);
    addOrder($db, $cart);
    echo "Purchase complete<br>";
}

echo "<br><a href='home.php'>Return Home</a>";
die();

function addCard($db, $cardNumber, $shopperID) {
    $query = 'INSERT INTO card(number, shopperid) VALUES (:number, :shopperid)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':number', $cardNumber, PDO::PARAM_INT);
    $stmt->bindValue(':shopperid', $shopperID, PDO::PARAM_INT);
    $stmt->execute();
}

function addOrder($db, $cart) {
    $query = 'UPDATE cart SET ordered = TRUE WHERE id = :cartid';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':cartid', $cart, PDO::PARAM_INT);
    $stmt->execute();
}