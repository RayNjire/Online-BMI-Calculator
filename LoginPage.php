<?php
    session_start();
    unset($_SESSION['TheUsersName']);
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - Login</title>
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
                        <li class = "active"><div><a href="LoginPage.php">LOGIN</a></div></li>
                        <li><div><a href="Health Advice.php">HEALTH ADVICE</a></div></li>
<br><br>
                    </ul>
                </div>
            </div>

            <div class = "paragraphs">
<br>
                <div class = "instruct">
                    <img class = "LoginSlide">
                </div>
                
                <form>
                    <p>
                        <?php
                            session_start();
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
                                echo "Connected to Database! You may Proceed and Login.<br><br>";
                            }
                        ?>
                            
                        <label for="textfield">UserName:</label>
<br>        
                        <input type="text" name = "UserName" id="TXTLogin">
<br>        
                        <label for="textfield2">Password:</label>
<br>        
                        <input type="password" name="Password" id="TXTPassword">
<br><br>        
                        <input class= "buttons" type="submit" name="BTNLogin" id="BTNLogin" value="Login">
                        <input class= "buttons" type="reset" name="BTNClear" id="BTNClear" value="Clear All">
                    
                        <?php
                            if (isset($_GET['BTNLogin']))
                            {
                                $UserName = $_GET ['UserName'];
                                $Password = $_GET ['Password'];

                                if(empty($UserName))
                                {
                                    echo "<script type='text/javascript'>alert('UserName field cannot be left blank.');</script>";
                                }

                                else if(empty($Password))
                                {
                                    echo "<script type='text/javascript'>alert('Password field cannot be left blank.');</script>";
                                }

                                else
                                {
                                    $_SESSION['TheUsersName'] = $UserName;
                                    $sql = "select * from signin where UserName = '".$UserName."' and Password = '".$Password."'";

                                    $result = mysqli_query ($conn, $sql);

                                    if (mysqli_num_rows ($result)>0)
                                    {
                                        echo "<script type='text/javascript'>alert('$UserName Logged In! \nWelcome to the BMI Calculator System!');</script>";

                                        $sql2 = "create table IF NOT EXISTS `".$UserName." BMI` (BMIID int(4) primary key auto_increment, Date Date, Height int(5), Weight int(5), BMI varchar(6))";

                                        $qury = mysqli_query ($conn, $sql2);

                                        if (!$qury)
                                        {
                                            echo "<script type='text/javascript'>alert('An error occured while creating your table, please contact the system admin.');</script>";
                                        }

                                        else
                                        {
                                            header("Location: Logged In (Metric).php");
                                            exit();
                                        }
                                    }

                                    else 
                                    {
                                        echo "<script type='text/javascript'>alert('Invalid Username or Password.');</script>";
                                    }
                                }
                            }
                        ?>
                    </p>
                </form>
            </div>
        </header>
    </body>
</html>