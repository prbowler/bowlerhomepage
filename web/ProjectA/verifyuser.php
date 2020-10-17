<?php
include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);

$statement = $db->query('SELECT * FROM shoppers WHERE username =' . $username_submitted . '');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
echo $results;

if ($results['password'] == $password_submitted) {
    $user = $results['id'];
}  else {
    echo 'Password is incorrect.';
    include 'login.php';
}

?>