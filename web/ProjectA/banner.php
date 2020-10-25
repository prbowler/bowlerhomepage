<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banner</title>
    <link rel="stylesheet" type="text/css" href="banner.css">
</head>
<body>
<?php
$user = 0;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

if ($user === 0) {
    $accountLink = '<li><a href="login.php">Login</a></li><li><a href="newuser.php">New User</a> </li>';
} else {
    $accountLink = '<li><a href="account.php">My Account</a></li><li><a href="logout.php">Logout</a> </li>';
}
?>
<div id="banner">
    <div id="logo">
        <a href="home.php">
            <img class="logo" src="../img/logo.jpg" alt="Logo" height="50"
                 width="50">
        </a>

    </div>
    <div>
        <h1 id="store-name">PB Survival Supplies</h1>
        <ul id="main-menu">
            <li><a href="home.php">Home</a></li>
            <?php echo $accountLink; ?>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="checkout.php">Checkout</a></li>
        </ul>
    </div>
    <div>
        <ul id="menu">
            <li><a href="food.php">Survival Food</a></li>
            <li><a href="produce.php">Fresh Produce</a></li>
            <li><a href="supplies.php">Survival Supplies</a></li>
            <li><a href="canning.php">Canning Supplies</a></li>
            <li><a href="guides.php">Guides</a></li>
        </ul>
    </div>
</div>

</body>
</html>