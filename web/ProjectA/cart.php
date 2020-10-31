<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Canning Supplies</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>

<?php
    include "banner.php";
    include "connect-db-ol.php";

    foreach ($db->query('SELECT * FROM items as i JOIN cart_details as cd on i.id = cd.itemid WHERE cd.shopperid = ' . $user . '') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        $total = $row['price'] * $row['quantity'];
        $itemId = $row['itemid'];
        $runningTotal += $total;
        echo
        '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:100%">
                <h3>' . $row["name"] . '</h3>
                <p class="price">$' . $row["price"] . '</p>
                <p><a href="removeItem.php?item_id='.$itemId.'">Remove from Cart</a></p>
                <form action="updateItems.php" method="post">
                    <input class="quantity" name="quantity" value="'.$row["quantity"].'">
                    <input type="hidden" name="item_id" value="'.$itemId.'">
                    <input type="submit" value="Update">
                </form>
                <p class="total">Total = $' . $total . '</p>
            </div>';
    }
    echo
        '<br>
         <div class="cart_total">Cart Total = $' . $runningTotal . '</div>';
?>
</body>