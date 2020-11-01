<?php
session_start();

require "connect-db-ol.php";
$username = htmlspecialchars($_POST["username"]);
$pw = htmlspecialchars($_POST["password"]);
$password = password_hash($pw, PASSWORD_DEFAULT);
$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);

$statement = $db->query('SELECT username, password, id FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$valid = true;
$user = 0;
//var_dump($results);

foreach ($results as $row) {
    if ($row['username'] == $username) {
        $valid = false;
    }
}
if ($valid === true) {
    $query = 'INSERT INTO shopper(username, firstname, lastname, email, address, password) VALUES (:username, :firstname, :lastname, :email, :address, :password) RETURNING id';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $user = $result['id'];
    $_SESSION['user'] = $user;
}

$new_page = "home.php";

header("Location: $new_page");
die();

/*$statement = $db->query('SELECT username, password, id FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$valid = true;
$user = 0;

foreach ($results as $row) {
    if ($row['username'] == $username) {
        $valid = false;
    }
}
if ($valid === true) {
    /*$db = get_db();
    $stmt = $db->prepare('INSERT INTO shopper(username, password, firstname, email, address) VALUES (:username_submitted, :password_submitted, :firstname, :lastname, :email, :address);');
    $stmt->bindValue(':username_submitted', $username_submitted, PDO::PARAM_STR);
    $stmt->bindValue(':password_submitted', $password_submitted, PDO::PARAM_STR);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->execute();
    //include 'verifyuser.php';
    echo '<script>alert("This function is not working yet. Try username=bbowler password=bbowler")</script>';
    include 'login.php';
} else {
    echo '<script>alert("Username has been used.")</script>';
    include 'newuser.php';
}

?>*/