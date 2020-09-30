
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <form action="teach03php.php" method="post">
       Name: <input type="text" name="name"><br>
       E-mail: <input type="email" name="email"><br>

       <?php
           $major = array("CS-Computer Science","WDD-Web Design and Development","CIT-Computer information Technology","CE-Computer Engineering");
           foreach ($major as $value) {
               echo "<input type='radio' name='Major' value='$value'>$value<br>";
           }
        ?>
<!--       <input type="radio" name="Major" value="Computer Science"> <label>Computer Science</label><br>-->
<!--       <input type="radio" name="Major" value="Web Design and Development"> <label>Web Design and Development</label><br>-->
<!--       <input type="radio" name="Major" value="Computer information Technology"> <label>Computer information Technology</label><br>-->
<!--       <input type="radio" name="Major" value="Computer Engineering"> <label>Computer Engineering</label><br>-->
       <textarea name="Comments" rows="10" cols="30"></textarea><br><br>
       <input type="checkbox" name="continents[]" value="North America"><label>North America</label>
       <input type="checkbox" name="continents[]" value="South America"><label>South America</label>
       <input type="checkbox" name="continents[]" value="Europe"><label>Europe</label>
       <input type="checkbox" name="continents[]" value="Asia"><label>Asia</label>
       <input type="checkbox" name="continents[]" value="Australia"><label>Australia</label>
       <input type="checkbox" name="continents[]" value="Africa"><label>Africa</label>
       <input type="checkbox" name="continents[]" value="Antarctica"><label>Antarctica</label>
       <input type="submit"><br>
   </form>


</body>
</html>