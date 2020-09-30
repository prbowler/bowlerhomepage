<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <form action="t3php.php" method="post">
       Name: <input type="text" name="name"><br>
       E-mail: <input type="email" name="email"><br><br>
       <?php
          $major = array("Computer Science","Web Design and Development","Computer information Technology","Computer Engineering");
          foreach($major as $value) {
              "<input type='radio' name='Major' value='$value'>$value";
          }
       ?>
       <input type="radio" name="Major" value="Computer Science"> Computer Science<br>
       <input type="radio" name="Major" value="Web Design and Development"> Web Design and Development<br>
       <input type="radio" name="Major" value="Computer information Technology"> Computer information Technology<br>
       <input type="radio" name="Major" value="Computer Engineering"> Computer Engineering<br><br>
       <textarea name="Comments" rows="10" cols="30"></textarea><br><br>

       <input type="checkbox" name="continents[]" value="North America"> North America<br>
       <input type="checkbox" name="continents[]" value="South America"> South America<br>
       <input type="checkbox" name="continents[]" value="Europe"> Europe<br>
       <input type="checkbox" name="continents[]" value="Asia"> Asia<br>
       <input type="checkbox" name="continents[]" value="Australia"> Australia<br>
       <input type="checkbox" name="continents[]" value="Africa"> Africa<br>
       <input type="checkbox" name="continents[]" value="Antarctica"> Antarctica<br>

       <input type="submit">
   </form>
</body>
</html>