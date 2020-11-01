<?php
session_start();
require "get_cart.php";
$user = 0;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    die();
}
require "connect-db-ol.php";

$id = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);
$cartID = getCart($db, $user);

$query = 'UPDATE cart_details SET quantity = :quantity WHERE itemid = :item_id AND cartid = :cartid';
$stmt = $db->prepare($query);
//$stmt = $db->prepare('INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid);');
$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_STR);
$stmt->bindValue(':cartid', $cartID, PDO::PARAM_STR);
$stmt->execute();

$new_page = "cart.php";
header("Location: $new_page");
die();