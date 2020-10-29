<?php


$username = "";
$password1 = "";
$password2 = "";
$usernameError = "valid";
$passwordError = "valid";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username'])) {
        $usernameError = "username is required";
    } else {
        $username = test_input($_POST["username"]);
    }
    if (empty($_POST['password1'])) {
        $passwordError = "password is required";
    } else {
        $password1 = test_input($_POST["password1"]);
    }
    if (empty($_POST['password2'])) {
        $passwordError = "password is required";
    } else {
        $password2 = test_input($_POST["password2"]);
    }
    if ($_POST['password1'] !== $_POST['password2']) {
        $passwordError = "passwords do not match";
    }
    if ($passwordError === "valid" && $usernameError === "valid") {
       $password = $password1;
       validateNewUser($username, $password);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateNewUser($username, $pw)
{
    session_start();
    require 'connect-db-ol.php';

    $password = password_hash($pw, PASSWORD_DEFAULT);
    $valid = true;

    $statement = $db->query('SELECT username, password, id FROM user_password');
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    //$user = 0;
    //var_dump($results);

    foreach ($results as $row) {
        if ($row['username'] == $username) {
            $valid = false;
        }
    }

    if ($valid === true) {
        $query = 'INSERT INTO user_password(username, password) VALUES (:username, :password)';
        $stmt = $db->prepare($query);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        echo '<script>alert("User Added")</script>';
    } else {
        echo '<script>alert("Username is already used")</script>';
    }

    $new_page = "login.php";

    header("Location: $new_page");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
         <label for="username">Username</label><br>
         <input type="text" name="username"><br>
         <label for="password">Password</label><br>
         <input type="password" name="password"><br>
         <input type="submit"><br>
     </form>
</body>
</html>
