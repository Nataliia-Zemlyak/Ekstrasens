<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the number of 5</title>
</head>
<body>
    <form action="result.php" method="POST">
        <?php
            $password = $_POST["password"];
            $ansNum = $_POST["ansNum"];
            if($password == $ansNum){
                echo("<p>You guessed it!</p>");
                
            }else{
                echo("<p>You didn't guess the number</p>");
                
            }
        ?>
    </form>
            <form action="range.php" method="POST"> 
                <?php   
                
                
                $password = $_POST["password"];
                $chooseStart = $_POST["chooseStart"];
                $chooseEnd = $_POST["chooseEnd"];
                $chooseRange = $chooseStart + 4;
                $ansNum = $_POST["ansNum"];
                if($password <= $chooseRange && $ansNum <= $chooseRange){
                    $b2 = 1;
                }else if($_POST["password"] >= $chooseRange && $_POST["ansNum"] >= $chooseRange){
                    $b2 = 1;
                }
                

                if(isset($_POST["run"])){
                    if($ansNum > $password){
                        echo("<p>Number is small $ansNum</p>");
                    }else if ($ansNum < $password){
                        echo("<p>Number is big $ansNum</p>");
                    }else if ($ansNum = $password){
                        echo("<p>You guessed it!</p>");
                        echo("<p>Mark is: $ansNum</p>");
                        
                    }
                }


                if($ansNum != $password){
                    echo("<select name='answerNumberOf5P'>");
                    if($_POST["password"] <= $chooseRange){
                        for($i = $chooseStart; $i <= $chooseRange; $i++){
                                echo("<option value=$i>$i</option>");
                        }
                    }else{
                        for($i = $chooseRange+1; $i <= $chooseEnd; $i++){
                                echo("<option value=$i>$i</option>");
                        }
                    }
                    echo("</select>");
                }
    
                if($ansNum != $password){
                    echo("<input type='submit' value='ok' name='run'>");
                }
                
            

        ?>
            <input type='hidden' name='password' value="<?php echo($password); ?>">
            <input type='hidden' name='chooseStart' value="<?php echo($chooseStart); ?>">
            <input type='hidden' name='chooseEnd' value="<?php echo($chooseEnd); ?>">
            <input type='hidden' name='ansNum' value="<?php echo($ansNum); ?>">
        </form>

</body>
</html>
