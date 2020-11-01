<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="newuser.css">
</head>
<body>
    <header>
        <?php include "banner.php";?>
    </header>
     <form action="verifynewuser.php" method="post">
     <h2>Account information</h2>
     <div id="customer">
        <label for="username" class="label">Username</label>
        <input id="username" name="username" type="text"><br>
        <label for="password" class="label">Password</label>
        <input id="password" name="password" type="password"><br>
        <label for="firstname" class="label">First Name</label>
        <input id="firstname" name="firstname" type="text"><br>
        <label for="lastname" class="label">Last Name</label>
        <input id="lastname" name="lastname" type="text"><br>
        <label for="email" class="label">Email</label>
        <input id="email" name="email" type="text"><br>
        <label for="address" class="label">Address</label>
        <textarea id="address" name="address" rows="4" cols="50"></textarea><br>
        <input id="submit" type="submit">
     </div>
     </form>
</body>
