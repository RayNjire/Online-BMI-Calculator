<?php
    session_start();
    unset($_SESSION['TheUsersName']);
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - New Signin</title>
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
                        <li class = "active"><div><a href="SigninPage.php">NEW SIGNIN</a></div></li>
                        <li><div><a href="LoginPage.php">LOGIN</a></div></li>
                        <li><div><a href="Health Advice.php">HEALTH ADVICE</a></div></li>
<br><br>
                    </ul>
                </div>
            </div>

            <div align = "left" class = "paragraphs">
                <div class = "instruct">
                    <img class = "SigninSlide">
                </div>
<br>
                <form>
                    <p>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "bmicalc";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);


                            if (!$conn)
                            {
                                die("<br>TRANSLATION... The database is offline and the signin process cannot be permitted to continue as it will not commit to database. <br><br>");
                            }

                            else
                            {
                                echo "Database Connection Successful! You may Proceed.<br> (Please fill in all fields with a red (*) asterisk)<br><br>";
                            }
                        ?>

                        <label for="textfield3"><span class= "asterisk">*</span>FirstName:</label>
<br>
                        <input type="text" name="FirstName" id="TXTFirstName">
<br>
                        <label for="textfield4"><span class= "asterisk">*</span>LastName:</label>
<br>
                        <input type="text" name="LastName" id="TXTLastName">
<br>
                        <label for="textfield5"><span class= "asterisk">*</span>UserName:</label>
<br>
                        <input type="text" name="UserName" id="TXTUserName">
<br>
                        <label for="textfield6"><span class= "asterisk">*</span>Password:</label>
<br>
                        <input type="password" name="Password" id="TXTPassword">
<br>
                        <label for="textfield7">PhoneNumber:</label>
<br>
                        <input type="text" name="PhoneNumber" id="PhoneNumber">
<br>                  
                        <label for="textfield8">Email:</label>
<br>
                        <input type="text" name="Email" id="TXTEmail">
<br><br>                    
                        <input class= "buttons" type="submit" name="BTNSignin" id="BTNSignin" value="Signin">
                        <input class= "buttons" type="reset" name="BTNClear" id="BTNClear" value="Clear All">
                        <script type = "text/javascript" src = "showhide.js"></script>
<br><br>
                        <?php
                            if (isset($_GET['BTNSignin']))
                            {
                                $FirstName = $_GET['FirstName'];
                                $LastName = $_GET['LastName'];
                                $UserName = $_GET['UserName'];
                                $Password = $_GET['Password'];
                                $PhoneNumber = $_GET['PhoneNumber'];
                                $Email = $_GET['Email'];

                                if(empty($FirstName))
                                {
                                    echo "<script type='text/javascript'>alert('FirstName field cannot be left blank.');</script>";
                                }

                                else if(empty($LastName))
                                {
                                    echo "<script type='text/javascript'>alert('LastName field cannot be left blank.');</script>";
                                }

                                else if(empty($UserName))
                                {
                                    echo "<script type='text/javascript'>alert('UserName field cannot be left blank.');</script>";
                                }

                                else if(empty($Password))
                                {
                                    echo "<script type='text/javascript'>alert('Password field cannot be left blank.');</script>";
                                }

                                else
                                {
                                    if (empty($Email) or (strpos($Email, "@") == true))
                                    {
                                        $sql2 = "insert into signin (FirstName, LastName, UserName, Password, PhoneNumber, Email) values 
                                        ('".$FirstName."', '".$LastName."', '".$UserName."', '".$Password."', '.$PhoneNumber.', '".$Email."')";

                                        $qury = mysqli_query ($conn, $sql2);

                                        if (!$qury)
                                        {
                                            echo "<script type='text/javascript'>alert('Signup failed, UserName already taken. Please pick another username.');</script>";
                                        }

                                        else
                                        {
                                            echo "<script type='text/javascript'>alert('New Signin Successful. Welcome to the BMI Calculator System! You may now proceed to login');</script>";
                                        }
                                    }   

                                    else if(!empty($Email) and strpos($Email, "@") === false)
                                    {
                                        echo "<script type='text/javascript'>alert('Please enter a valid email address.');</script>";
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