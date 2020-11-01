<?php
session_start();
session_unset();
session_destroy();
$new_page = "home.php";
header("Location: $new_page");
?>