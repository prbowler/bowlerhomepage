<?php
session_start();
include 'connect-db-ol.php';
$user = 0;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

if ($user === 0) {
    include "login.php";
} else {
    $statement = $db->query('SELECT username, password, id FROM user_password WHERE id ='.$user.'');
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
    echo "Welcome user $results[0]['username']";
}


