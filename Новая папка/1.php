<?php

$str = 'aba accca azzza wwwwa';

echo $str."<br>". preg_replace('/a.*?a/','!',$str)."<br>";
?>

<?php
$str =  'aa aba abba abbba abbbba abbbbba abbbbbbbbbba' ;

echo $str."<br>". preg_replace('/a(b{2,4})a/','!',$str)."<br>";
echo $str."<br>". preg_replace('/a(b{0,3})a/','!',$str)."<br>";
echo $str."<br>". preg_replace('/a(b{4,})a/','!',$str)."<br>"
?>

<?php
$str = 'a1a a2a a3a a4a a5a aba aca';

echo $str ."<br>". preg_replace('/a\da/','@',$str)."<br>";



?>

<?php

$str = 'a1a a22a a333a a4444a a55555a aba aca';

echo $str."<br>". preg_replace('/a\d*a/','@',$str)."<br>";
?>

<?php

$str = 'avb a1b a2b a3b a4b a5b abb acb';

echo $str."<br>". preg_replace('/a\Db/','@',$str)."<br>";
?>
<?php

$str = 'ave a#b a2b a$b a4b a5b a-b acb';

echo $str."<br>". preg_replace('/a\Wb/','@',$str)."<br>";
echo $str."<br>". preg_replace('/\s/','@',$str)."<br>"
?>

<?php
$str = 'aAXa aeffa aGha aza ax23a a3sSa';

echo $str."<br>". preg_replace('/a[a-z]+a/','@',$str)."<br>";
echo $str."<br>". preg_replace('/a[a-z0-9]+a/','@',$str)."<br>"
?>

<?php
$str =  'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';

echo $str."<br>". preg_replace('/[а-яА-ЯЁё]+/','@',$str)."<br>";

?>
<?php
$str =  'aeeea aeea aea axa axxa axxxa';
$tr = 'xbx aca aea abba adca abea';
$str2 = 'a\a abc';
echo $str."<br>". preg_replace('/a(e+|x+)a/','@',$str)."<br>";
echo $str."<br>". preg_replace('/a(e{2}|x+)a/','@',$str)."<br>";

echo $tr."<br>". preg_replace('/\b/','!',$tr)."<br>";

echo $str2."<br>". preg_replace('/a\\\\a/','!',$str2);
?>

<?php

// $str = "bbb /aaa\ bbb /ccc\";

// echo $str."<br>". preg_replace("/\\\\.*\//","@","bbb/aaa\bbb/ccc\");
echo preg_replace('#/[a-z]+\\\\#', '!', 'bbb /aaa\ bbb /ccc\\');

?>

<?php
$str = 'bbb <b> hello </b>, <b> world </b> eee';


// echo preg_replace('#<b>(.+?)</b>#','#',$str);
echo preg_replace('#<b>(.+?)</b>#', '!', 'bbb <b> hello </b>, <b> world </b> eee');

?>
