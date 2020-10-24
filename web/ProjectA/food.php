<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survival Food</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>

<?php
    include "banner.php";
    include "connect-db-ol.php";

    foreach ($db->query('SELECT * FROM items as i WHERE categoryid = 1') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        $id = $row['i.id'];
        echo
            '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:100%">
                <h3>' . $row["name"] . '</h3>
                <p class="price">$' . $row["price"] . '</p>
                <p><button onclick="additem.php?item_id=$id">Add to Cart</button></p>
            </div>';
    }
?>
</body>
