<?php
// print_r ($_POST['mail']);
$file=file('list.txt');
foreach($file as &$word){
    $word=trim($word);
}

$word = implode('|', $file);

if(preg_match("/$word/i",$_POST['mail'])){
   
    echo " НЕ ругайся";
}else{
    echo "Отлично";
}
?>