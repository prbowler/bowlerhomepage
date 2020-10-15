<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Canning Supplies</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>

<?php
    include "banner.html";
    include "connect-db-ol.php";

    foreach ($db->query('SELECT * FROM items as i JOIN cart as c on i.id = c.itemid') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        $total = $row['price'] * $row['quantity'];
        $runningTotal += $total;
        echo
        '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:100%">
                <h3>' . $row["name"] . '</h3>
                <p class="price">$' . $row["price"] . '</p>
                <p><button>Remove from Cart</button></p>
                <input class="quantity" value="'.$row["quantity"].'">
                <p class="total">$' . $total . '</p>
            </div>';
    }
    echo 'Total = $runningTotal';
?>
</body>
