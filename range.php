<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>They say you see the future</title>
</head>
<body>
    <form action="range.php" method="POST">
        <?php 
            $password = $_POST["password"];
            $chooseStart = $_POST["chooseStart"];
            $chooseEnd = $_POST["chooseEnd"];
            $chooseRange = $chooseStart + 4;
            $ansNum = $_POST["ansNum"];
            
            
                if(isset($_POST["run"])){
                    if($ansNum > $password){
                        echo("<p>Number is small. $ansNum</p>");
                        
                    }else if ($ansNum < $password){
                        echo("<p>Number is big. $ansNum</p>");
                        
                    }else if ($ansNum = $password){

                        echo("<p>You guessed it!</p>");
                    }
                }
        
                if($ansNum != $password){
                    echo("<select name='ansNum'>");
                    if($_POST["password"] <= $chooseRange){
                        for($i = $chooseStart; $i <= $chooseRange; $i++){
                                echo("<option value=$i>$i</option>");
                        }
                    }else{
                        for($i = $chooseRange; $i <= $chooseEnd; $i++){
                            echo("<option value=$i>$i</option>");
                        }
                    }
                    echo("</select>");
                }
            
                    echo("<input type='submit' value='ok' name='run'>");
            
        ?>
                <input type='hidden' name='password' value="<?php echo($password); ?>">
                <input type='hidden' name='chooseStart' value="<?php echo($chooseStart); ?>">
                <input type='hidden' name='chooseEnd' value="<?php echo($chooseEnd); ?>">
                
                
    </form>

</body>
</html>
