<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Canning Supplies</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>

<?php
    include "banner.php";
    include "items.php";
    getItemsByCat(4);
    include "connect-db-ol.php";
?>
</body>

