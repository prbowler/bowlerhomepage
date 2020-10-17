<?php
include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$shopper = "SELECT * from shopper WHERE userid == $username_submitted";

if ($shopper['password'] == $password_submitted) {
    $user = $shopper['id'];
}  else {
    echo 'Password is incorrect.';
    include 'login.php';
}

?>