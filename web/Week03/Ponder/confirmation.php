<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);
?>

<html>
    <title>"Confirmation"</title>
    <link rel="stylesheet" type="text/css" href="confirmation.css">
<body>
    <?php include 'cart.php';?>
    <div id="confirmed">
        <h2>Your oder has been confirmed.</h2>
        <section id="customer">
            <div id="name"><?php echo "Name: $name";?></div><br>
            <div id="email"><?php echo "Email: $email";?></div><br>
            <div id="address"><?php echo "Address: $address";?></div><br>
        </section>
    </div>
</body>
</html>

