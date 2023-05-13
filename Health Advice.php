<?php
    session_start();
    unset($_SESSION['TheUsersName']);
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator - Health Advice</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body class = "HealthAdviceBody">
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
                        <li class = "active"><div><a href="Health Advice.php">HEALTH ADVICE</a></div></li>
<br><br>
                    </ul>
                </div>
            </div>
            
            <div class = "paragraphs">
                <div class = "Diet">
<br>
                    <h3>Follow a Heart-Healthy Diet</h3><br><br>
                    <div align = "justified" class = "DietText">
                        <p class = "HealthAdviceText">
                            It can be very frustrating to feel like you are overweight, not to mention the health risks involved. You might feel less confident and even a bit sluggish. One of the best ways to become healthier is to change your diet by eating healthy foods and controlling portion size. When you begin a diet, make sure that you are getting enough nutrients and not going overboard on limiting your food intake. Diet is always most effective when combined with other healthy lifestyle choices and a good attitude.
                        </p>
                    </div>
                    
                    <a href = "https://m.wikihow.com/Diet-Properly">
                        <img class = "zoom" src="Diet1.jpg">
                        <img class = "zoom" src="Diet2.jpg">
                    </a>
                </div>
<br>
                <div class = "Exercise">
                    <h3>Exercise Every Day</h3><br><br>
                    <div align = "justified" class = "ExerciseText">
                        <p class = "HealthAdviceText">
                            Weight loss doesn’t have to be complicated: if you burn more calories than you consume, you’ll lose weight! However, you don’t have to go on a strict diet or count every calorie to be successful in weight loss. If you create an active lifestyle and make exercise a habit, you’ll be able to lose weight.
                        </p>
                    </div>
                    
                    <a href="https://m.wikihow.com/Lose-Weight-Just-by-Exercising">
                        <img class = "zoom" src="Exercise1.jpg">
                        <img class = "zoom" src="Exercise2.jpg">
                    </a>
                </div>
<br>
                <div class = "Stress">
                    <h3>Cut Down on Stress</h3><br><br>
                    <div align = "justified" class = "StressText">
                        <p class = "HealthAdviceText">
                            Feeling stress is totally normal, but it’s not good for you. Knowing how to relax is vital for ensuring your health and well-being, as well as restoring the passion and joy in your life. Allowing stress to affect you can lead to depression, illness, weight gain and a general sense of malcontent. Learn to recognize stress and deal with it by calming your mind and your body. It’s also a good idea to spend time doing things that you love. Finally, you’ll likely feel more relaxed if you learn to deal with difficult people.
                        </p>
                    </div>
                    
                    <a href="https://m.wikihow.com/Relax">
                        <img class = "zoom" src="Relax1.jpg">
                        <img class = "zoom" src="Relax2.jpg">
                    </a>
                </div>
<br>
                <div class = "Habits">
                    <h3>Create Healthy Habits</h3><br><br>
                    <div align = "justified" class = "HabitsText">
                        <p class = "HealthAdviceText">
                            Forming good habits of staying hygienic, avoiding both alcohol and smoking as much as posssible will benefit your life tremendously. In our lives, most of the diseases are closely associated with these bad habits. But also maintaining small routines such as changing your clothes often, trimming and washing your hair, showering frequently, washing your hands before eating and brushing your teeth regularly, can directly impact on the quality of your health and at the same time promote your social life and the improve personal morality and self esteem.
                        </p>
                    </div>
                    
                    <a href="https://m.wikihow.com/Cultivate-Healthy-Habits-from-Childhood">
                        <img class = "zoom" src="Habits1.jpg">
                        <img class = "zoom" src="Habits2.jpg">
                    </a>
                </div>
            </div>
        </header>
    </body>
</html>