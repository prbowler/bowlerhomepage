<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
mailto: <?php echo $_POST["email"]; ?><br>
Major: <?php echo $_POST["Major"]; ?><br>
Comments: <?php echo $_POST["Comments"]; ?><br>
Continents:
<?php
   foreach($_POST["continents"] as $value) {
       echo "$value <br>";
   }
?>
</body>
</html>