<?php
session_start();
$user = 0;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
require "connect-db-ol.php";

$id = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);
$shopperid = $user;

$query = 'INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid)';
$stmt = $db->prepare($query);
//$stmt = $db->prepare('INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid);');
$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_STR);
$stmt->bindValue(':shopperid', $shopperid, PDO::PARAM_STR);
$stmt->execute();

$new_page = "cart.php";

header("Location: $new_page");
die();

