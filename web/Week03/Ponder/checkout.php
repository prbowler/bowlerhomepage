<html>
    <title>"Checkout"</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
<body>
<header>
    <?php
        include 'cart.php';
    ?>

</header>
<section>
    <div id="customer">
        <form action="confirmation.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="email" name="email"><br>
            Address: <textarea name="address"></textarea><br>
            <input id="purchase" type="submit" value="Purchase">
        </form>
    </div>

</section>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
