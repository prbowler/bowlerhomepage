<?php
require "connect-db-ol.php";

$user = htmlspecialchars($_POST["user"]);
$username = htmlspecialchars($_POST["username"]);
$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);

//$query = 'UPDATE cart_details SET quantity = :quantity WHERE itemid = :item_id AND cartid = :cartid';
//$stmt = $db->prepare($query);

$query = 'UPDATE shopper SET username = :username, firstname = :firstname, lastname = :lastname, email = :email, address = :address WHERE id = :id';
$stmt = $db->prepare($query);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':id', $user, PDO::PARAM_INT);
$stmt->execute();

$new_page = "home.php";
header("Location: $new_page");
die();

