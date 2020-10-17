<?php
include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$statement = $db->query('SELECT username, password FROM shopper');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($results);

if ($results['password'] == $password_submitted) {
    $user = $results['id'];
}  else {
    echo 'Password is incorrect.';
    include 'login.php';
}

?>