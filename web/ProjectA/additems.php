<?php
require "connect-db-ol.php";
$id = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);
$shopperid = 1;

$query = 'SELECT * FROM items WHERE id = ' . $id .'';
$stmt = $db->prepare($query);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
$item = $items[0];

$stmt = $db->prepare('INSERT INTO cart(item_id, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid);');
$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_STR);
$stmt->bindValue(':shopperid', $shopperid, PDO::PARAM_STR);
$stmt->execute();

