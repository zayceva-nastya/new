<?php
// print_r($_POST);
$xml_date=date("d.m.y h-m-s");


$str =<<<XML
\n<msg>
    <text>$_POST[msg]</text>
    <name>$_POST[name]</name>
    <date>$xml_date</date>
</msg>
XML;

// file_put_contents("1.xml",$str,FILE_APPEND );


?>
<?php
include('xml_fun.php');

save_xml($_POST['msg'],$_POST['name'],date("d.m.y h-m"));
echo "<pre>";
$arr = read_xml("1.xml");

foreach($arr as $key=>$value){
    echo $value['name'].":".$value['text'].":".$value['date']."<br>";
}

?>
