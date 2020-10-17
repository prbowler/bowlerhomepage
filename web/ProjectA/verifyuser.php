<?php
include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$statement = $db->query('SELECT username, password FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$valid = false;

foreach ($results as $row) {
    if ($row['username'] == $username_submitted && $row['password'] == $password_submitted) {
        echo $row['username'];
        $valid = true;
        $user = $row['username'];
    }
}

?>