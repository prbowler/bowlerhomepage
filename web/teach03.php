<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
mailto: <?php echo $_POST["email"]; ?><br>
Major: <?php echo $_POST["Major"]; ?><br>
Comments: <?php echo $_POST["Comments"]; ?><br>
Continents:
<?php
   $continent = array($_POST["continents"]);
   foreach($continent as $value) {
       echo "$value <br>";
   }
?>
</body>
</html>