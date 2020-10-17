<?php
session_start();

include 'connect-db-ol.php';
$username_submitted = htmlspecialchars($_POST["username"]);
$password_submitted = htmlspecialchars($_POST["password"]);
$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);


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
    $stmt = $db->prepare('INSERT INTO shopper(username, password, firstname, email, address) VALUES 
                        (:username_submitted, :password_submitted, :firstname, :lastname, :email, :address);');
    $stmt->bindValue(':username_submitted', $username_submitted, PDO::PARAM_STR);
    $stmt->bindValue(':password_submitted', $password_submitted, PDO::PARAM_STR);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->execute();
    $newId = $pdo->lastInsertId('shopper_id_seq');
    $_SESSION['user'] = $newId;
    include 'home.php';
} else {
    echo '<script>alert("Username has been used.")</script>';
    include 'newuser.php';
}

?>