<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
</head>
<body>

<?php
include "banner.php";
include "connect-db-ol.php";

echo "<table><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
foreach ($db->query('SELECT * FROM items as i JOIN cart as c on i.id = c.itemid WHERE c.shopperid = ' . $user . '') as $row) {
    //$image = 'img/' . $row['image'] . '.jpg';
    $total = $row['price'] * $row['quantity'];
    $itemId = $row['itemid'];
    $runningTotal += $total;
    echo
        '<tr>
                <td>' . $row["name"] . '</td>
                <td>$' . $row["price"] . '</td>
                <td>'.$row["quantity"].'</td>
                <td>$' . $total . '</td>
            </tr>';
}
echo
    '<tr><td>Grand Total</td><td></td><td></td>
     <td>$' . $runningTotal . '</td></table>
     <a href="purchase.php">Purchase</a>';
?>
</body>
