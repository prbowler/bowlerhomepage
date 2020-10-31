<?php
/*session_start();

$user = 0;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    die();
}*/
require "connect-db-ol.php";
//$user = htmlspecialchars($_POST['user_id']);
$cart = htmlspecialchars($_POST['cart_id']);
$id = htmlspecialchars($_POST['item_id']);
$quantity = htmlspecialchars($_POST['quantity']);
//$shopperid = $user;
echo "$cart $id $quantity";

$query = 'INSERT INTO cart_details(cartid, itemid, quantity) VALUES (:cart_id, :item_id, :quantity)';
$stmt = $db->prepare($query);
$stmt->bindValue(':cart_id', $cart, PDO::PARAM_INT);
$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$stmt->execute();

$new_page = "cart.php";

header("Location: $new_page");
die();

