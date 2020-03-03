<?php
// print_r($_POST['msg']);
$pat1="/\:\-\)/";
$pat2="/\:\-\(/";
$img="<img src='rrr.png' height='15' weight='15'>";

echo preg_replace($pat, $img, $_POST['msg'])

?>