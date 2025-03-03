<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age="19";
        $gender="f";
        if($age>18)
        {
            if($gender=='M' || $gender=='m')
            {
                echo "You are eligible for Vote and You are male Candidae";
            }
            else
            {
                echo "You are eligible for Vote vote for bjp ";
            }
        }
        else
        {
            print("You are not eligible for Vote...");
        }
    ?>
</body>
</html>