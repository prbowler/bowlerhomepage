<?php
require "connect-db-ol.php";
include "banner.php";

$shopperid = htmlspecialchars($_POST['shopper_id']);
$cardNumber = htmlspecialchars($_POST['card_number']);

echo "Purchase complete<br>";
//echo "Shopper ID= $shopperid";
//echo "Card Number = $cardNumber";
if ($cardNumber !== '' && $shopperid !== '') {
    $query = 'INSERT INTO card(number, shopperid) VALUES (:number, :shopperid)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':number', $cardNumber, PDO::PARAM_INT);
    $stmt->bindValue(':shopperid', $shopperid, PDO::PARAM_INT);
    $stmt->execute();
}

echo "<br><a href='home.php'>Return Home</a>";
