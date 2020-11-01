<?php
function getUser() {
    session_start();

    $user = 0;
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        include "login.php";
    }
    return $user;
}
