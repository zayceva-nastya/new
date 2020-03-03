<?php
print_r ($_POST['mail']);
$file=file_get_contents('list.txt');
// echo $file;
$str=preg_split("/[\s,]+/",$file);
// print_r ($str);
$pat="/^[0-1]$/";
foreach ($str as $key => $value) {
if ((preg_match_all($pat,$key))){
    // echo $value;
    
}
}
// if(preg_match_all("/\b($str[0])\b|\b($str[1])\b/",$_POST['mail'])){
// echo "вы говорите плохие слова";
// }else{
    // echo "отлично";
// }
// 
// $reg = implode(';', $str);
// $reg="дурак редиска ";
// if(preg_match("/^(\w+$reg)$/i",$_POST['mail'])){
    // foreach($str as $values){
        // echo $values;
    // if(preg_match("/^(\s+\b$values\b)$/i",$_POST['mail'])){
    // echo "good";
// }else{
    // echo "bad";
// }}

?>