<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
mailto: <?php echo $_POST["email"]; ?><br>
Major: <?php echo $_POST["Major"]; ?><br>
Comments: <?php echo $_POST["Comments"]; ?><br>
Continents:
<?php
   $continents = $_POST["continents"];
   foreach($continents as $value) {
       echo "$value <br>";
   }
?>
</body>
</html>