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
    <?php echo "<div class='main'>" ?>
    <?php

    // include('xml_fun.php');
    include('config.php');
    include('fun.php');
    
    foreach(read_xml("chat.xml") as $key=>$value){
         echo "<div>" . $value['name'] . ":\t" .   cens(smile(bb_code(htmlspecialchars($value['text'])))) .
        "\t<span class='n'>$value[date]</span></div>\n";
    }

  
    

    
    ?>
    <?php echo "</div>" ?>

</body>

</html>