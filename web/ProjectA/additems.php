<?php

$itemId = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);

$query = 'SELECT * FROM items WHERE id = ' . $id .'';
$stmt = $db->prepare($query);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
$item = $items[0];
var_dump($items);
echo "adding items";
echo $itemId;
echo $quantity;

