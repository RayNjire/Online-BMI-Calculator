<?php
    session_start();
    if (empty($_SESSION['TheUsersName']))
    {
        echo "<script type='text/javascript'>alert('This user logged out, you cannot return to this page.');</script>";
        sleep (5);
        header("Location: Index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - Index (Logged In)</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            <div class="row">
                <div class = "logo">
                    <a href = "Logged In (IndexPage).php"><img src = "Logo3.png"></a>
                </div>
<br>
                <div class = "main-elements">
                    <ul align="center" class="main-nav">
                        <li><div><a href="Logged In (Metric).php">HOME</a></div></li>
                        <li><div><a href="Logged In (SigninPage).php">NEW SIGNIN</a></div></li>
                        <li><div><a href="Logged In (LoginPage).php">LOGIN</a></div></li>
                        <li><div><a href="Logged In (Health Advice).php">HEALTH ADVICE</a></div></li>
                    </ul>
                </div>
            </div>
<br><br>
            <div class = "paragraphs">
                <h1>Welcome to the BMI Calculator Website!</h1> <h4 class = "Logout" align = "right">Logged In as <?php echo "".$_SESSION['TheUsersName']."";?>. <a class = "LogoutLink" href = "Index.php">Logout</a></h4><br><br>
<br>
                <div class = "IndexText" align = "left">
                    <p>
                        This webpage is created to promote healthy living, fitness and to combat obesity.
                        A common statement of every conscious mind of today's world is "Am I Healthy?" 
                        Burning calories has become a trend, and as a result, so have gymnasiums, 
                        sporting activities and even casual exercise routines.
                        In a mordern day city it is asured that you can find at least one gym near you, 
                        not just for convinience and allowing you to better your health, 
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