<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
$arr = scandir("dowlands");;
for ($i = 2; $i < count($arr); $i++) {

    switch (explode(".", $arr[$i])[1]) {

        case 'docx':
            $icon = 'icons/docx.png';
            break;
        case 'pdf':
            $icon = 'icons/pdf.jpg';
            break;

        default:
            $icon = 'icons/sm.jpg';
            break;
    }
    $size1 = filesize('dowlands\\' . $arr[$i]);
    $size = (round(($size1 / 1024), 2));

    echo "<a href='dowlands\\$arr[$i]'>" .
        "<img src='$icon' width='20' height='20'>$arr[$i]</a>.($size Kb)\n\t" .
        "<a href='rename_form.php?name=$arr[$i]'>".
        "<img src='icons\index.jpg' width='20' height='15'></a>\t" .
        "<a href='edit.php?edit=$arr[$i]'>edit<img src='icons\e.jpg' width='20' height='15'></a>".
        "<a href='see.php?see=$arr[$i]'><img src='icons\see.jpg' width='20' height='15'></a>".
        "<a href='del.php?file=$arr[$i]'>".
        "<img src='icons\x.jpg' width='20' height='15'></a><br>\n";
}
echo  "<br>";
echo "<a href='form.html'><img src='home.jpg' width='70' height='50'></a>";
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

