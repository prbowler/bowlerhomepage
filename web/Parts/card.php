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
    $user = 'postgres';
    $password = 'Fleetreelyncrook@9011';
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
foreach ($db->query('SELECT * FROM item as i') as $row) {
    echo
    '<div class="card">
            <img src="bellpeppers.jpg" alt="Bell Peppers" style="width:100%">
            <h3>' . $row["name"] . '</h3>
            <p class="price">$' . $row["price"] . '</p>
            <p><button>Add to Cart</button></p>
        </div>';
}