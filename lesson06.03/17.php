<?php
// print_r($_POST['url']);

$file = file_get_contents($_POST['url']);
// echo $file;
$new_file = strip_tags($file) ;

echo $new_file;

$pat = [
    "/<.*?>|<\/.*?>/iux",
    "/\{\s.*\}/iux",
    "/\\\\n(t|r)/iux",
    "/if(\(function\(.*\))/iux",
    "/\(.*\)|\[.*\]|\\\\|\=\>|[0-9]|(\'.*\')/iux",
    "/\<\?.*\?\>/iux",
    "/<\?(?:php|=|\s+).*?\?>/s"

];
preg_replace ($pat," ",$new_file);
preg_match_all ('/\w+/iu',$new_file, $match);

foreach($match[0] as $word){
    $arr[$word]++;
   
}
echo "<pre>";
arsort($arr);

//  print_r($arr);

?>
<?php

// $str = "<p>Параграф.</p> <b>Еще текст</b>";


// echo strip_tags($str);
?>

<?php

$str = " (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=] => 1
  [44c \u0] => 1
  [4/] => 1
  [43d. \u0] => 1
  [438 'description'\r\n\t\u0] => 1
  [112374.jpg','name:\u0] => 1
  [4)";
// echo preg_replace('/(\<.*?\>\{.*?\})|(\<\/.*?\>\{.*?\})|[\\\\n(t|r)]/',' ',$str);
// echo strip_tags($str);

$pat = [
    "/\<.*?\>|\<\/.*?\>/",
    "/\{\s.*\}/",
    "/\\\\n(t|r)/",
    "/if(\(function\(.*\))/"
];

// echo preg_replace ('/\(.*\)|\[.*\]|\\\\|\=\>|[0-9]|(\'.*\')/',' ',$str);