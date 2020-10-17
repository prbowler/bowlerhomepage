<?php
session_start();

include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);


$statement = $db->query('SELECT username, password, id FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$valid = true;
$user = 0;

foreach ($results as $row) {
    if ($row['username'] == $username_submitted) {
        $valid = false;
    }
}
if ($valid === true) {
    $_SESSION['user'] = $user;
    //insert into table new user
    include 'home.php';
} else {
    echo '<script>alert("Username has been used.")</script>';
    include 'newuser.php';
}

?>