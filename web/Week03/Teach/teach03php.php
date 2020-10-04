<?php
   $name = htmlspecialchars($_POST["name"]);
   $email = htmlspecialchars($_POST["email"]);
   $major = htmlspecialchars($_POST["major"]);
   $comments = htmlspecialchars($_POST["comments"]);
?>

<html>

<body>
Name: <?php echo $name;?> <br>
Email: <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a> <br>
Major: <?php echo $major; ?> <br>
Comments: <?php echo $comments; ?> <br>
Continents:
<?php
     foreach ($_POST['continents'] as $value) {
         echo "$value <br>";
     }
?>
</body>
</html>

