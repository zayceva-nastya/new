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
    $ban= file('config.txt');
    print_r($ban);
    $ip=$_SERVER['SERVER_ADDR'];
    print_r($ip);
    foreach ($arr as $key => $value) {
        $buf = explode(":", $value);
        if(in_array($ip,$ban)){
            echo "Вы забанены<br>";
        }else{
             echo ($key % 2 == 0) ? "<div class='odd'>$buf[3]:$buf[4]</div>" : "<div class='even'>$buf[3]:$buf[4]</div>";
        }

       
    }

    ?>

</body>

</html>