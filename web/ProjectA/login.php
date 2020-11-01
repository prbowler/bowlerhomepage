<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
    include "banner.php";
    echo
    '<form action="verifyuser.php" method="post">
         <label for="username">Username</label>
         <input type="text" name="username">
         <label for="password">Password</label>
         <input type="password" name="password">
         <input type="submit" class="submit">
         <a href="newuser.php" class="new_user">New User</a>
     </form>';
?>
</body>
</html>