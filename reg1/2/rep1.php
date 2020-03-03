<?php
$pat=[
    0=>'/\:\-\)/',
    1=>'/\:\-\(/'
];
$img=[
    0=>"<img src='rrr.png' height='15' weight='15'>",
    1=>"<img src='grust.jpg' height='15' weight='15'>"
];
 
echo preg_replace($pat,$img,$_POST['msg']);

?>