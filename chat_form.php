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
    if(!empty($_POST['mes'])){
        file_put_contents("chat.txt",$_SERVER['HTTP_USER_AGENT'].":".$_SERVER['SERVER_ADDR'].":".$_POST['name'].":".$_POST['mes']."\n",FILE_APPEND);
    }
  
    

    ?>
      <form action='?' method='post'>
          <input type="text" name="name" value="<?=$_POST['name']?>">
          <input type="text" name="mes">
          
          <input type="submit" >
</form>
</body>
</html>