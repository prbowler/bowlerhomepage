<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fresh Produce</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>

<?php include "connect-db.php";

foreach ($db->query('SELECT * FROM item as i WHERE categoryid = 2') as $row) {
    $image = 'img/' . $row['image'] . '.jpg';
    echo
        '<div class="card">
            <img src="' . $image .'"alt="'. $image .'" style="width:100%">
            <h3>' . $row["name"] . '</h3>
            <p class="price">$' . $row["price"] . '</p>
            <p><button>Add to Cart</button></p>
        </div>';
}
?>
</body>

