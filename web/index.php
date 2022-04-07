<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Home Page">
    <meta name="keywords" content="">
    <meta name="author" content="Philip Bowler">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Philip Bowler's Home Page"</title>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
    <script src="myJs.js"></script>
</head>
<body>
<header>
    <div id="banner">
        <?php include 'logo.php';?>
        <h1>Philip Bowler's Home Page</h1>
    </div>
</header>
<section id="main">
    <h2> Hi my name is Philip Bowler</h2>
    <h3> I enjoy Web Development both front-end and back-end.</h3> 
    <div id="picture">
        <figure>
            <img src="img/me.jpg" alt="My wife and I" width="173" height="164" id="me">
        </figure>
        <div>
            <?php
            echo "Arizona time and date is " . date("Y/m/d  h:i:sa");
            ?>
        </div>
    </div>
    <div>
        <h2>Here are some of my projects</h2>
        <ul>          
            <li><a href="https://bowlerhomeautomation.herokuapp.com/">A home automation system built with PHP, JavaScript, Python, CSS, HTML, and Mysql</a></li>
            <li><a href="./ProjectA/home.php">A store front built with PHP, JavaScript, CSS, and HTML</a></li>
            <li><a href="https://projectrook.herokuapp.com/">A Rook game built with Node.js, EJS, and PosgreSQL</a></li>
            <li><a href="https://bowlerzengarden.herokuapp.com/">ZenGarden styling using CSS</a></li>
        </ul>
    </div>
</section>
<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>