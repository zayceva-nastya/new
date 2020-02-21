<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>
<body>
    <?php
if(isset($_FILES) && $_FILES['fail']['error'] == 0){ // Проверяем, загрузил ли пользователь файл

    $destiation_dir = dirname(__FILE__) .'/'.'dowlands'.'/'.$_FILES['fail']['name']; // Директория для размещения файла
    move_uploaded_file($_FILES['fail']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию

    echo "<div class='box2'>Файл успешно загружен </div>"; // Оповещаем пользователя об успешной загрузке файла
    }
    else{
    echo 'No File Uploaded'; // Оповещаем пользователя о том, что файл не был загружен
    }
    ?>
</body>
</html>

