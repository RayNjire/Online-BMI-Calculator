<?php
    session_start();
    unset($_SESSION['TheUsersName']);
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - Imperial Measurement</title>
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
                        <li class = "active"><div><a href="Home Metric.php">HOME</a></div></li>
                        <li><div><a href="SigninPage.php">NEW SIGNIN</a></div></li>
                        <li><div><a href="LoginPage.php">LOGIN</a></div></li>
                        <li><div><a href="Health Advice.php">HEALTH ADVICE</a></div></li>
                    </ul>
                </div>
            </div>
<br><br>
            <div class = "paragraphs">
                <h1>CALCULATE YOUR BODY MASS INDEX</h1>
<br><br><br>
                <h2>What is BMI?</h2>
                <p>
                    Body Mass Index (BMI) is a measure of body fat based on height and weight. This applies to both men and women.<br>
                    Enter your height and weight in either metric or imperial measurements.<br>
                    Select "Calculate BMI" and your BMI will appear below. <a href="https://www.thecalculatorsite.com/articles/health/bmi-formula-for-bmi-calculations.php">How do you calculate BMI?</a> Click the link to find out.
                </p>
<br>
                <div class="instruct">
                    <p>
                        Underweight = less than 18.5<br>
                        Normal weight = 18.5 to 24.9<br>
                        Overweight = 25 to 29.9<br>
                        Obese = 30 or greater<br><br>
                    </p>
                </div>
<br>
                <table width="625" height="212" border="2" cellpadding="5">
                    <tr>
                        <th width="290" scope="col"><a href="Home Metric.php">Metric Measurements</a></th>
                        <th width="290" scope="col"><a href="Home Imperial.php">Imperial Measurements</a></th>
                    </tr>
                    <tr>
                        <td height="170" colspan="2" align="center">
<br>
                        <form>
                            <label for="FeetText">Your Height: </label>
                            <input class = "TXT" type="number" name="FeetText" id="TXTFeet">(Feet)
                            <input class = "TXT" type="number" name="InchText" id="TXTInches">
                            <label for="InchText">(Inches)</label>
<br><br>
                            <label for="PoundsText">Your Weight:</label>
                            <input class = "TXT" type="number" name="PoundsText" id="TXTPounds">(In Pounds)
<br><br>
                            <input class= "buttons" type="submit" name="BTNCalc" value="Calculate BMI">
                            <input class= "buttons" type="reset" name="BTNClear" id="BTNClear" value="Clear All">
<br><br>
                            <?php
                                if(isset($_GET['BTNCalc']))
                                {
                                    $num1 = $_GET['FeetText'];
                                    $num2 = $_GET['InchText'];
                                    $num3 = $_GET['PoundsText'];

                                    if(empty($num1))
                                    {
                                        echo "Feet(ft) cannot be left blank.";
                                    }

                                    else if(empty($num2))
                                    {
                                        echo "Inches(in) cannot be left blank.";
                                    }

                                    else if(empty($num3))
                                    {
                                        echo "Weight(lbs) cannot be left blank.";
                                    }

                                    else
                                    {
                                        $num4 = $num1 * 12;
                                        $num5 = $num2 + $num4;
                                        echo "Your Height is: "; echo $num5; echo "in <br>";
                                        echo "Your Weight is: "; echo $num3; echo "lbs <br>";

                                        $sum = (703 * ($num3/($num5 * $num5)));
                                        $sum = round($sum, 2);
                                        echo "Your BMI Result: "; echo $sum;
                                    }
                                }
                            ?>
                        </form>
                    </tr>
                </table>
            </div>
        </header>
    </body>
</html>