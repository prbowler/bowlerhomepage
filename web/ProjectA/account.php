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
            '<section id="customer">
                <div id="username">' . $row["username"] .'</div><br>
                <div id="name">' . $row['firstname'] . ' ' . $row['lastname'] . '</div>
                <div id="email">' . $row["email"] . '</div><br>
                <div id="address">' . $row["address"] . '</div><br>
            </section>';
    }
?>
</body>
