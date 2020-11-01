<?php
$user = htmlspecialchars($_POST["username"]);
$username = htmlspecialchars($_POST["username"]);
$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);

$query = 'UPDATE shopper(username, firstname, lastname, email, address) VALUES (:username, :firstname, :lastname, :email, :address)';
$stmt = $db->prepare($query);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->execute();

$new_page = "home.php";
header("Location: $new_page");
die();

