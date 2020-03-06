<?php
// print_r($_POST['mail']);
$file=file_get_contents($_POST['mail']);
$w=$_POST['word'];
echo preg_match_all("/$w/iu",$file);

// echo preg_match_all('//')