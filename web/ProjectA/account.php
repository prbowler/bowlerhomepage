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

    foreach ($db->query('SELECT * FROM shopper as s WHERE id = 1') as $row) {
        echo
            '
             <form>
             <div id="customer">
                <input id="username" type="text" value="' . $row["username"] .'"><br>
                <input id="firstname" type="text" value="' . $row['firstname'] .'">
                <input id="lastname" type="text" value="' . $row['lastname'] . '"><br>
                <input id="email" type="text" value="' . $row["email"] . '"><br>
                <textarea id="address" value="' . $row["address"] . '"></textarea><br>
            </div>
            </form>';
    }
?>
</body>
