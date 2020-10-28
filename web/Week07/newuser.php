<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
include "connect-db-ol.php";
echo
'<form action="verifynewuser.php" method="post">
         <label for="username">Username</label><br>
         <input type="text" name="username"><br>
         <label for="password">Password</label><br>
         <input type="password" name="password"><br>
         <input type="submit"><br>
     </form>';
?>
</body>
</html>
