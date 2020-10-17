<?php
session_start();

include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$statement = $db->query('SELECT username, password, id FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$valid = false;
$shopper = 0;

foreach ($results as $row) {
    if ($row['username'] == $username_submitted && $row['password'] == $password_submitted) {
        $valid = true;
        $shopper = $row['id'];
    }
}
if ($valid === true) {
    $_SESSION['user'] = $user;
    include 'home.php';
} else {
    echo '<script>alert("Password is incorrect")</script>';
    include 'login.php';
}

?>
