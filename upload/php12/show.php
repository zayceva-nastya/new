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

    echo "<a href='dowlands\\$arr[$i]'><img src='$icon' width='20' height='20'>$arr[$i]</a>.($size Kb)\n\t <a href='rename_form.php?name=$arr[$i]'><img src='icons\index.jpg' width='20' height='15'></a>\t<a href='del.php?file=$arr[$i]'><img src='icons\x.jpg' width='20' height='15'></a><br>\n";
}
echo  "<br>";
echo "<a href='form.html'><img src='home.jpg' width='70' height='50'></a>";
