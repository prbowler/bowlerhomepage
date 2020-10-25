<?php
require "connect-db-ol.php";
include "banner.php";

$shopperid = $_POST[shopper_id];
$cardNumber = $_POST['card_number'];

echo "Purchase complete<br>";
echo "Shopper ID= $shopperid";
echo "Card Number = $cardNumber";

echo "<br><a href='home.php'>Return Home</a>";
