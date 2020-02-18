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
    include('config.php');
// $format=("H-i-s d m Y");
    foreach ($arr as $key => $value) {

        $buf = explode($separator, $value);

        $date = getdate($buf[4]);
        $time = $date['hours'] . ":" . $date['minutes'] . "\t\t" . $date['mday'] . "\t" . $date['month'] . "\t" . $date['year'];

        echo ($key % 2 == 0) ? "<div class='odd'> $buf[2] : $buf[3]    <div class=n>$time</div></div>" : "<div class='even'> $buf[2] : $buf[3]   <div class=n>$time</div> </div>   ";
    }

    ?>

</body>

</html>