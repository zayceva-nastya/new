<?php

function save_xml($text,$name,$date){

   $xml="<msg><text>$text</text><name>$name</name><date>$date</date></msg>\n";
   return file_put_contents("1.xml",$xml,FILE_APPEND);
};


function read_xml($text){
$file= file_get_contents($text);
$str = preg_match_all("/<text>(.*?)<\/text><name>(.*?)<\/name><date>(.*?)<\/date>/ius",$file,$match);
$arr=[];
foreach($match[1] as $key=>$value){
$arr[$key]['text']=$value;
$arr[$key]['name']=$match[2][$key];
$arr[$key]['date']=$match[3][$key];
}
return $arr;
}
