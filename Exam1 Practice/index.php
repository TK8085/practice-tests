<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "functions.php";
    
        if ($_GET)
        {
            echo(interestPaid($_GET["percentage"], $_GET["loanAmt"], $_GET["years"]));
             //echo("no");
        } else {
            echo(funfacts());
            
        }

        include "form.php";

    ?>



    
</body>
</html>