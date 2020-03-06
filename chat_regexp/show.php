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
 <?php echo "<div class='main'>"?>
    <?php


    $arr = file('chat.txt');
    include ('config.php');
    include ('fun.php');
// $format=("H-i-s d m Y");
    foreach ($arr as $key => $value) {

        $buf = explode($separator, $value);

echo "<div>". $buf[2].":\t".  cens(smile(bb_code(htmlspecialchars($buf[3])))) .
"\t<span class='n'>$buf[4]</span></div>\n";
    }

    ?>
    <?php echo "</div>"?>

</body>

</html>