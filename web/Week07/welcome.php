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
    $username = $db->query('SELECT username, id FROM user_password WHERE id = '.$user.'');
    var_dump($username);
}


