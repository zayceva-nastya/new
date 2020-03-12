<?php
// echo file_get_contents("1.xml");
$file = file_get_contents("1.xml");
// echo  preg_replace('/<text>(.*?)<\/text><name>(.*?)<\/name><date>(.*?)<\/date>/ius',"##",$file);
preg_match_all("/<text>(.*?)<\/text><name>(.*?)<\/name><date>(.*?)<\/date>/ius",$file,$match);
echo "<pre>";
print_r($match);
