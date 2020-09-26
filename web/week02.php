<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="CSE 341">
    <meta name="keywords" content="">
    <meta name="author" content="Philip Bowler">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Philip Bowler CSE 341"</title>
    <link rel="stylesheet" type="text/css" href="week02Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#changeColor").click(function(){
                let color = $("#colorPick").val();
                $("#div1").css("background-color", color);
            });
            $("#hide").click(function(){
                $("#div2").fadeOut("slow");
            });
        });
    </script>

</head>
<body>
<?php include 'logo.php';?>
<div id="div1">Div 1</div>
<div id="div2">Div 2</div>
<div id="div3">Div 3</div>
<button id="clickButton">Click Me</button>
<label for="colorPick">Color</label>
<input type="text" id="colorPick" name="color">
<button id="changeColor">Change Color</button>
<button id="hide">Hide</button>
<!--script src="week02Js.js"></script-->
<?php include 'footer.php';?>
</body>
</html>
