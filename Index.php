<?php
    session_start();
    unset($_SESSION['TheUsersName']);
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - Index Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="row">
                <div class = "logo">
                    <a href = "index.php"><img src = "Logo3.png"></a>
                </div>
<br>
                <div class = "main-elements">
                    <ul align="center" class="main-nav">
                        <li><div><a href="Home Metric.php">HOME</a></div></li>
                        <li><div><a href="SigninPage.php">NEW SIGNIN</a></div></li>
                        <li><div><a href="LoginPage.php">LOGIN</a></div></li>
                        <li><div><a href="Health Advice.php">HEALTH ADVICE</a></div></li>
                    </ul>
                </div>
            </div>
<br><br>
            <div class = "IndexHead">
                <h1 align = "center">WELCOME TO THE BMI CALCULATOR WEBSITE!</h1>
            </div>

            <div class = "paragraphs">
                <div class = "IndexText" align = "left">
                    <p>
                        This webpage is created to promote healthy living, fitness and to combat obesity. 
                        A common statement of every conscious mind of today's world is "Am I Healthy?" 
                        Burning calories has become a trend, and as a result, so have gymnasiums, sporting activities and even casual exercise routines. 
                        In a modern day city it is assured that you can find at least one gym near you, not just for convenience and allowing you to better your health, 
                        but to also remind you that you can always better your well being and keep in tip-top shape.
<br><br>
                        Browse through the website to find out what BMI is, how to calculate it and also get some free advice on what you can do to improve your health.
                    </p>
                </div>
                
                <div align = "right">
                    <img class= "IndexSlide">
                </div>
            </div>
        </header>
    </body>
</html>