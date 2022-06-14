<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>They say you see the future</title>
</head>
<body>
    <form action="game.php" method="POST">
    <?php
        
        
        $password = rand(1, 100);

        echo("<h1>Chose diapazone</h1>");
            echo("<select name='choose'>");
                $f = 1;
                for($i = 1; $i <= 10; $i++){
                    $j = $i * 10;
                    $p = "$f-$j";
                    echo("<option value=$p>$f-$j</option>");
                    $f += 10;
                }
            echo("</select>");
    ?>

        <input type='hidden' name='password' value="<?php echo($password); ?>">
        
        
        <input type="submit" name="go" value="go" />
        
    </form>
</body>
</html>