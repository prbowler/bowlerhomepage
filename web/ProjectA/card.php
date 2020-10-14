<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>
<?php
try
{
    $user = 'prbow';
    $password = 'database';
    $db = new PDO('pgsql:host=localhost;dbname=mydb', $user, $password);

    //$db = new PDO('pgsql:host=localhost;dbname=myTestDB', $user, $password);
    // this line makes PDO give us an exception when there are problems,
    // and can be very helpful in debugging! (But you would likely want
    // to disable it for production environments.)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}

/* Works for all items
foreach ($db->query('SELECT * FROM item as i') as $row) {
    $image = 'img/' . $row['image'] . '.jpg';
    echo
    '<div class="card">
            <img src="' . $image .'"alt="'. $image .'" style="width:100%">
            <h3>' . $row["name"] . '</h3>
            <p class="price">$' . $row["price"] . '</p>
            <p><button>Add to Cart</button></p>
        </div>';
}
*/

/* Works for categoryid 2
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
*/

/* Works for items in cart*/
foreach ($db->query('SELECT * FROM item as i JOIN cart as c on i.id = c.itemid') as $row) {
    $image = 'img/' . $row['image'] . '.jpg';
    echo
    '<div class="card">
            <img src="' . $image .'"alt="'. $image .'" style="width:100%">
            <h3>' . $row["name"] . '</h3>
            <p class="price">$' . $row["price"] . '</p>
            <p><button>Add to Cart</button></p>
        </div>';
}
/**/


