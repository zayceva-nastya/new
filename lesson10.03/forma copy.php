<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box1{
            height: 80%;
        }
        .box2{
            height: 20%;
        }
    </style>
</head>

<body>
    <?="<div class='box1'>"?>
    <?php
    include('xml_fun.php');
    include('fun.php');
    if (!empty($_POST['msg']) && !empty($_POST['name'])) {
        save_xml(htmlspecialchars($_POST['msg']), htmlspecialchars($_POST['name']), date("d.m.y h-m"));
    }

    echo "<pre>";
    // $arr = read_xml("1.xml");

    foreach (read_xml("1.xml") as $key => $value) {
        echo smile($value['name']) . ":" . smile($value['text']). ":" . $value['date'] . "<br>";
    }

    ?>
 <?="</div>"?>
 <?="<div class='box2'>"?>
    <form action="?" method="post">
        <textarea name="msg" id="" cols="10" rows="5"></textarea>
        <input type="text" name="name">
        <input type="submit">


    </form>
    <?="</div>"?>
</body>

</html>