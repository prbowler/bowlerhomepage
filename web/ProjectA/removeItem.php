<?php
session_start();
$user = 0;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    die();
}
require "connect-db-ol.php";

$id = htmlspecialchars($_POST['item_id']);
$shopperid = $user;
echo "id = $id";
echo "shopperid = $shopperid";
/*
//$query = 'DELETE FROM cart WHERE itemid = ' . $id . ' AND shopperid = ' . $shopperid . '';
$stmt = $db->prepare('DELETE FROM cart WHERE itemid = ? AND shopperid = ?');
//$stmt = $db->prepare('INSERT INTO cart(itemid, quantity, shopperid) VALUES (:item_id, :quantity, :shopperid);');
//$stmt->bindValue(':item_id', $id, PDO::PARAM_INT);
//$stmt->bindValue(':quantity', $quantity, PDO::PARAM_STR);
//$stmt->bindValue(':shopperid', $shopperid, PDO::PARAM_STR);
$stmt->execute($id, $shopperid);

$new_page = "home.php";

header("Location: $new_page");
die();
*/

