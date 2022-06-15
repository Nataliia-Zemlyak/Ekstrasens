<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the number of 5</title>
</head>
<body>
<?php
        session_start();
        $password = $_POST["password"];
        $number = $_POST["number"];
        $rangeStart = $_POST["rangeStart"];
        $rangeLast = $_POST["rangeLast"];
        $choose = [];
        if($password == $number){
            echo("<p>Вітію! Ви відгадали число</p>");
            echo("<a href='index.php'>Розпочати нову гру</a>");
        }else{
            echo("<p>Ви не відгадали число</p>");
            echo("<h4>Оберіть число</h4>");
            echo('<form action="range.php" method="POST">');
            $password = $_POST["password"];
            $rangeStart = $_POST["rangeStart"];
            $rangeLast = $_POST["rangeLast"];
            $range = $rangeStart + 4;
            $chooseAnswer = $_POST["chooseAnswer"];//

            if(isset($_POST["run"])){
                if($chooseAnswer > $password){
                    echo("<p>Число менше</p>");
                }else if ($chooseAnswer < $password){
                    echo("<p>Число більше</p>");
                }
            }


            if($chooseAnswer != $password){
                echo("<select name='chooseAnswer'>");//
                if($_POST["password"] <= $range){
                    for($i = $rangeStart; $i <= $range; $i++){
                            echo("<option value=$i>$i</option>");
                    }
                }else{
                    for($i = $range+1; $i <= $rangeLast; $i++){
                            echo("<option value=$i>$i</option>");
                    }
                }
                echo("</select>");
            }

            $chooseEncode = json_encode($choose);
            echo("<input type='hidden' name='password' value='$password'>");
            echo("<input type='hidden' name='rangeStart' value='$rangeStart'>");
            echo("<input type='hidden' name='rangeLast' value='$rangeLast'>");
            echo("<input type='hidden' name='choose' value='$chooseEncode'>");
            if($chooseAnswer != $password){
                echo("<p><input type='submit' value='run' name='run'></p>");
            }
            echo("</form>");
        }
    ?>

</body>
</html>
