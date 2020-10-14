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
    include "connect-db.php";

    foreach ($db->query('SELECT * FROM shopper as s WHERE userid = 1') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        echo
            '<section id="customer">
                <div id="name">' . $row["name"] .'</div><br>
                <div id="email">' . $row["email"] . '</div><br>
                <div id="address">' . $row["address"] . '</div><br>
            </section>';
    }
?>
</body>
