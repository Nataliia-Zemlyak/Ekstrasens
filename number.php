<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гра Екстрасенс</title>
</head>
<body>
<form action="result.php" method="POST">
        <?php

            $password = $_POST["password"];
            $chooseStart = $_POST["answer"][0].$_POST["answer"][1];
            if($chooseStart == "1-"){
                $chooseStart = $_POST["answer"][0];

            }

            $chooseEnd = $chooseStart + 9;
            

            if($_POST["password"] >= $chooseStart && $_POST["password"] <= $chooseEnd){
                echo("<p>Ви обрали вірний діапазон</p>");
                echo("<p>Виберіть число</p>");
            }else{
                echo("<p>Ви не вгадали діапазон</p>");
                echo("<p>Виберіть число з правильного діапазону</p>");
            }

            $rangeStart = floor(($_POST["password"]-1)/10)*10+1;
            $rangeLast = $rangeStart + 9;
            echo("<select name='number'>");

            for($i = $rangeStart; $i <= $rangeLast; $i++){
                echo("<option value=$i>$i</option>");
            }

            echo("</select>");

            echo("<input type='hidden' name='password' value='$password'>");
            echo("<input type='hidden' name='rangeStart' value='$rangeStart'>");
            echo("<input type='hidden' name='rangeLast' value='$rangeLast'>");
            echo("<p><input type='submit' value='run'></p>");
        ?>
    </form>
</body>
</html>
