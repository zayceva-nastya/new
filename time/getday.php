<?php

$arr=[
    1=> 'Понедельник',
    2=> 'Вторник',
    3=> 'Среда',
    4=> 'Четверг',
    5=> 'Пятница',
    6=> 'Суббота',
    7=> 'Воскресенье'

];
$day=[
    'Monday'=> 'Понедельник',
    'Tuesday'=> 'Вторник',
    'Wednesday'=> 'Среда',
    'Thursday'=> 'Четверг',
    'Friday'=> 'Пятница',
    'Saturday'=> 'Суббота',
    'Sunday'=> 'Воскресенье'

];

$today=getdate();
foreach($today as $key=>$value){
   
}
//  echo "$today[month] $today[wday]";
// echo "<pre>";
// print_r($today);
echo $arr[$today['wday']]."<br>";
echo $arr[getdate()['wday']];
echo $day[$today['weekday']]."<br>";
echo $day[getdate()['weekday']];

?>