<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // print_r($_SERVER['SERVER_ADDR']);
    // print_r($_SERVER['HTTP_USER_AGENT']);
    // print_r($_SERVER['REQUEST_TIME']);
    include ('config.php');
    $ban = file('banlist.txt');
    $time=date("H-i-s d m Y");
    if (in_array(   $_SERVER['SERVER_ADDR'], $ban)) {
        echo "Вы забанены<br>";
    }
    else{
        if((!empty($_POST['name']))&&(!empty($_POST['mes']))){
        file_put_contents("chat.txt",$_SERVER['HTTP_USER_AGENT'].$separator.$_SERVER['SERVER_ADDR'] .$separator.$_POST['name'].$separator.$_POST['mes'].$separator.$time."\n",FILE_APPEND);
        }
    }
  
    

    ?>
      <form action='?' method='post'>
          <input type="text" name="name" value="<?=isset($_POST['name'])?$_POST['name']:'';?>">
          <input type="text" name="mes">
          
          <input type="submit" >
</form>
</body>
</html>