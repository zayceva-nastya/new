<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// echo $_GET['name'];


?>

<form action="name.php" method="post">
<input type="text" name="name" value="<?=$_GET['name']?>">
<input type="text" name="oldname" value="<?=$_GET['name']?>" hidden>

<input id="a" type="submit" value="rename">
</form>

</body>
</html>
