<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survival Food</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>
<?php
    include "banner.html";
    include "connect-db-ol.php";
    $useerid = 2;

    foreach ($db->query('SELECT * FROM shopper as s WHERE id = ' . $useerid .'') as $row) {
        echo
            '
             <form>
             <h2>Account information</h2>
             <div id="customer">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" value="' . $row["username"] .'"><br>
                <label for="firstname">First Name</label>
                <input id="firstname" name="firstname" type="text" value="' . $row['firstname'] .'">
                <label for="lastname">Last Name</label>
                <input id="lastname" name="lastname" type="text" value="' . $row['lastname'] . '"><br>
                <label for="Email">Email</label>
                <input id="email" name="email" type="text" value="' . $row["email"] . '"><br>
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4" cols="50">' . $row["address"] . '</textarea><br>
                <input id="submit" type="submit">
            </div>
            </form>';
    }
?>
</body>
