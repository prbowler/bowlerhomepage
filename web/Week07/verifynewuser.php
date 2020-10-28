<?php
//session_start();

require "connect-db-ol.php";
//require "password.php";

$username = htmlspecialchars($_POST["username"]);
$pw = htmlspecialchars($_POST["password"]);
$password = password_hash('bbowler', PASSWORD_DEFAULT);
$valid = true;

$statement = $db->query('SELECT username, password, id FROM user_password');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$user = 0;
//var_dump($results);

foreach ($results as $row) {
    if ($row['username'] == $username) {
        $valid = false;
    }
}

if ($valid === true) {
    $query = 'INSERT INTO user_password(username, password) VALUES (:username, :password)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    echo '<script>alert("User Added")</script>';
} else {
    echo '<script>alert("Username is already used")</script>';
}

$new_page = "login.php";

header("Location: $new_page");
die();

