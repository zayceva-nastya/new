<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
 echo"<pre>";
echo htmlspecialchars("<textarea></textarea>",file_get_contents('dowlands\\'.$_GET['see']))."<br>";

?>  
 <a href='show.php'><img src='home.jpg' width='70' height='50'></a>
</body>
</html>

    