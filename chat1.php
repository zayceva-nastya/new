<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0.5" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>

<body>

    <?php


    $arr = file('chat.txt');
    include ('config.php');
    foreach ($arr as $key => $value) {
        $buf = explode($separator, $value);
         echo ($key % 2 == 0) ? "<div class='odd'>$buf[2]:$buf[3]</div>" : "<div class='even'>$buf[2]:$buf[3]</div>";
        
    }

    ?>

</body>

</html>