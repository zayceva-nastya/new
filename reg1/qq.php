<?php
$str='ahb acb aeb aeeb adcb axeb';
$pat= preg_match_all('/a(.)b/',$str);
print_r ($pat);


?>
<?php
$str='aba aca aea abba adca abea';
echo preg_match_all('/a..a/',$str);
?>

<?php
$str='aba aca aea abba adca abea';
echo preg_match_all('/ab(b|e)a/',$str);
?>

<?php
$str='aa aba abba abbba abca abea';
echo preg_match_all('/ab+a/',$str);
?>

<?php
$str='aa aba abba abbba abca abea ';
echo preg_match_all('/ab*a/',$str);
?>
<?php
$str='aa aba abba abbba abca abea ';
echo preg_match_all('/ab?a/',$str);
?>

<?php
$str='aa aba abba abbba abca abea ';

echo preg_replace('/(ab)+/','!',$str);
?>

<?php
$str='a.a aba aea ';

echo "<br>". preg_replace('/a\.a/','!',$str);
?>

<?php
$str='2+3 223 2223 ';

echo "<br>". preg_replace('/2\+3/','!',$str);
?>

<?php
$str=' 23 2+3 2++3 2+++3 345 567 ';

echo "<br>". preg_replace('/2(\+)*3/','!',$str);
?>
<?php
$str='*+ *q+ *qq+ *qqq+ *qqq qqq+ ';

echo "<br>". preg_replace('/\*q*\+/','!',$str);
?>
<?php
	echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa');
?>
