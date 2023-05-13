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
        <title>BMI Calculator - Login (Logged In)</title>
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
                        <li class = "active"><div><a href="Logged In (LoginPage).php">LOGIN</a></div></li>
                        <li><div><a href="Logged In (Health Advice).php">HEALTH ADVICE</a></div></li>
                    </ul>
                </div>
            </div>
<br><br>
            <div class = "instruct">
                <h4 class = "Logout" align = "right">Logged In as <?php echo "".$_SESSION['TheUsersName']."";?>. <a class = "LogoutLink" href = "LoginPage.php">Logout</a></h4>
                <img class = "LoginSlide">
            </div>
<br>            
            <div class = "LoggedInUserFields">
                <form>
                    <p>
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