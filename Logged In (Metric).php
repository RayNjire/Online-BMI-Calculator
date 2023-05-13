<?php
    session_start();
    echo "<script type='text/javascript'>alert('Your table was created successfully. You can now save your progress to our database.');</script>";
    
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
        <title>BMI Calculator - Logged In (Metric)</title>
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
                        <li class = "active"><div><a href="Logged In (Metric).php">HOME</a></div></li>
                        <li><div><a href="Logged In (SigninPage).php">NEW SIGNIN</a></div></li>
                        <li><div><a href="Logged In (LoginPage).php">LOGIN</a></div></li>
                        <li><div><a href="Logged In (Health Advice).php">HEALTH ADVICE</a></div></li>
                    </ul>
                </div>
            </div>
<br>
            <div class = "paragraphs">
                <br><h1>CALCULATE YOUR BODY MASS INDEX</h1> <h4 align = "right">Logged In as <?php echo "".$_SESSION['TheUsersName']."";?>. <a href = "Home Metric.php">Logout</a></h4><br><br>
<br>
                <h2>What is BMI?</h2>
                <p>
                    Body Mass Index (BMI) is a measure of body fat based on height and weight. This applies to both men and women.<br>
                    Enter your height and weight in either metric or imperial measurements.<br>
                    Select "Calculate BMI" and your BMI will appear below.  <a href="https://www.thecalculatorsite.com/articles/health/bmi-formula-for-bmi-calculations.php">How do you calculate BMI?</a> Click the link to find out.
                </p>
<br>
                <div class="instruct">
                    <p>
                        Underweight = less than 18.5<br>
                        Normal weight = 18.5 to 24.9<br>
                        Overweight = 25 to 29.9<br>
                        Obese = 30 or greater
                    </p>
                </div>
                
                <table width="625" height="212" border="2" cellpadding="5">
                    <tr>
                        <th width="290" scope="col"><a href="Logged In (Metric).php">Metric Measurements</a></th>
                        <th width="290" scope="col"><a href="Logged In (Imperial).php">Imperial Measurements</a></th>
                    </tr>
                    
                    <tr>
                        <td height="170" colspan="2" align="center">
                        <form>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "bmicalc";

                                $conn=mysqli_connect ($servername, $username, $password, $dbname);

                                if (!$conn)
                                {
                                    die("Connection Failed: " .mysqli_connect_error ());
                                }

                                else
                                {
                                    echo "Hello ".$_SESSION['TheUsersName'].", You are connected to the database. Your BMI results will be saved.<br><br>";
                                }
                            ?>
                            
                            <label for="textfield">Your Height: </label>
                            <input class="centeredTXT" type="number" name="CentiText">(In Centimeters)
<br><br>
                            <label for="textfield2">Your Weight:</label>
                            <input class="centeredTXT" type="number" name="KiloText">(In Kilograms)
<br><br>
                            <input type="submit" name="BTNCalc" value="Calculate BMI">
                            <input type="reset" name="BTNClear" id="BTNClear" value="Clear All">
<br><br>
                            <?php
                                if(isset($_GET['BTNCalc']))
                                {
                                    $num1 = $_GET['CentiText'];
                                    $num2 = $_GET['KiloText'];

                                    if(empty($num1))
                                    {
                                        echo "Height(cm) cannot be left blank.";
                                    }

                                    else if(empty($num2))
                                    {
                                        echo "Weight(kg) cannot be left blank.";
                                    }

                                    else if(!empty($num2 & $num1))
                                    {
                                        echo "Your Height is: "; echo $num1; echo "cm <br>";
                                        echo "Your Weight is: "; echo $num2; echo "kg <br>";

                                        $sum = $num2/(($num1/100)*($num1/100));
                                        $sum = round($sum, 2);
                                        echo "Your BMI Result: "; echo $sum;

                                        $sql2 = "INSERT INTO `".$_SESSION['TheUsersName']." BMI` (Date, Height, Weight, BMI) VALUES (Now(), ".$num1.", ".$num2.", ".$sum.")";

                                        $qury = mysqli_query ($conn, $sql2);

                                        if (!$qury)
                                        {
                                            echo "<script type='text/javascript'>alert('An error occured while inserting your data, please confirm the data you have inserted.');</script>";
                                        }

                                        else
                                        {
                                            echo "<script type='text/javascript'>alert('Your data has been inserted successfully!');</script>";
                                        }
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