<?php
session_start();
?>
<html>
    <title>"Cart"</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
<body>
<header>
    <?php include 'banner.php';?>
</header>
<section>
    <div id="cartheader">
        <span class="type">Item</span>
        <span class="price">Price</span>
        <span class="amount">Quantity</span>
        <span class="total">Total</span><br>
    </div>
    <?php
        $veggiePrices = array('Broccoli' => 2.95, 'Tomatoes' => 3.95, 'Cabbage' => 1.95, 'Bell Peppers' => 2.05, 'Carrots' => 2.15, 'Cucumbers' => 2.05);
        $veggieAmount = array('Broccoli' => 0, 'Tomatoes' => 0, 'Cabbage', 'Bell Peppers' => 0, 'Carrots' => 0, 'Cucumbers' => 0);
        $pricePerVeggie = array('Broccoli' => 0, 'Tomatoes' => 0, 'Cabbage', 'Bell Peppers' => 0, 'Carrots' => 0, 'Cucumbers' => 0);
        $veggies = array('Broccoli', 'Tomatoes', 'Bell Peppers', 'Carrots', 'Cucumbers', 'Cabbage');
        $total = 0;
        foreach($veggies as $vegetable) {
            if (isset($_SESSION[$vegetable])) {
                $veggieAmount[$vegetable] = $_SESSION[$vegetable];
                $pricePerVeggie[$vegetable] = $veggieAmount[$vegetable] * $veggiePrices[$vegetable];
                echo "<div class='item'><div class='type'>$vegetable</div><div class='price'> $veggiePrices[$vegetable]</div>
                    <div class='amount'>$veggieAmount[$vegetable]</div>
                    <div class='total'>$pricePerVeggie[$vegetable]</div></div><br>";
                $total += $pricePerVeggie[$vegetable];
            }
        }
        echo "<div id='total'>Total = $total</div>";
    ?>
</section>
</body>
</html>


