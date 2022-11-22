<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<link rel="stylesheet" href="quickstyle.css">




    <?php
    
    if (date("H") < "24" and date("H") > "20"){
        die("choď spinkať");
    }

    date_default_timezone_set("Europe/Bratislava");
    $time = date("Y/m/d, h:i:sa");
    $time .=PHP_EOL;
    echo "príchod: $time  <br>";


    if (date("H") < "20" and date("H") > "8"){
        echo ("neskoro mas smolu");
        file_put_contents(testfile, $time . " meškanie" . PHP_EOL, FILE_APPEND);
    } 


    ?>
    
</body>
</html>