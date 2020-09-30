<?php
   $name = htmlspecialchars($_POST["name"]);
   $email = htmlspecialchars($_POST["name"]);
   $major = htmlspecialchars($_POST["name"]);
   $comments = htmlspecialchars($_POST["name"]);
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

