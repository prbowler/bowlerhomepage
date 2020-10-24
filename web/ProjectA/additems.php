<?php
require "connect-db-ol.php";
$id = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);
$shopperid = 1;

$query = 'INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid)';
$stmt = $db->prepare($query);
//$stmt = $db->prepare('INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid);');
$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_STR);
$stmt->bindValue(':shopperid', $shopperid, PDO::PARAM_STR);
$stmt->execute();

include "cart.php";
die();

