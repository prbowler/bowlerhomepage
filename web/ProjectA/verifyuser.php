<?php
include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$statement = $db->query('SELECT * FROM shopper WHERE username = ' . $username_submitted . '');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo $row['username'] . $row['password'];
}


?>