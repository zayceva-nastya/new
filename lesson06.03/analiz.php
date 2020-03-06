<?php
// printf($_POST['text']);
preg_match_all('/\w+/iu', $_POST['text'], $matches);
echo "<pre>";
// print_r($matches);
foreach($matches[0] as $word){
$arr[$word]++;
}
arsort($arr);
print_r($arr);
?>