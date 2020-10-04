<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>alert('Item has been added')</script>";
    $type = htmlspecialchars($_POST['vegetable']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $_SESSION[$type] = $quantity;
}
?>
<html>
    <meta charset="UTF-8">
    <meta name="description" content="Products">
    <meta name="keywords" content="Fresh Vegetables">
    <meta name="author" content="Philip Bowler">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Products"</title>
    <link rel="stylesheet" type="text/css" href="products.css">
<body>
<header>
    <?php include 'banner.php'; ?>

</header>
<section id="vegetables1">
    <form action="products.php" method="post">
    <div id="broccoli">
        <img src="img/broccoli.jpg" alt="Broccoli" width="225" height="300">
        <input type="text" name="vegetable" value="Broccoli" class="type" readonly>
        <input type="text" name="price" value="$2.95" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addbroccoli" class="add" value="Add">
    </div>
    </form>
    <form action="products.php" method="post">
    <div id="tomatoes">
        <img src="img/tomatoes.jpg" alt="tomatoes" width="225" height="300">
        <input type="text" name="vegetable" value="Tomatoes" class="type" readonly>
        <input type="text" name="price" value="$3.95" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addtomatoes" class="add" value="Add">
    </div>
    </form>
    <form action="products.php" method="post">
    <div id="cabbage">
        <img src="img/cabbage.jpg" alt="cabbage" width="225" height="300">
        <input type="text" name="vegetable" value="Cabbage" class="type" readonly>
        <input type="text" name="price" value="$1.95" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addcabbage" class="add" value="Add">
    </div>
    </form>
</section>
<section id="vegetables2">
    <form action="products.php" method="post">
    <div id="bellpeppers">
        <img src="img/bellpeppers.jpg" alt="bellpeppers" width="225" height="300">
        <input type="text" name="vegetable" value="Bell Peppers" class="type" readonly>
        <input type="text" name="price" value="$2.05" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addbellpeppers" class="add" value="Add">
    </div>
    </form>
    <form action="products.php" method="post">
    <div id="carrots">
        <img src="img/carrots.jpg" alt="carrots" width="225" height="300">
        <input type="text" name="vegetable" value="Carrots" class="type" readonly>
        <input type="text" name="price" value="$2.15" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addcarrots" class="add" value="Add">
    </div>
    </form>
    <form action="products.php" method="post">
    <div id="cucumbers">
        <img src="img/cucumbers.jpg" alt="cucumbers" width="225" height="300">
        <input type="text" name="vegetable" value="Cucumbers" class="type" readonly>
        <input type="text" name="price" value="$2.05" class="price" readonly>
        <input type="number" name="quantity" value="1" class="quan">
        <input type="submit" id="addcucumbers" class="add" value="Add">
    </div>
    </form>
</section>
<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>
