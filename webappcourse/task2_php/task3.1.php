<?php
$date=$_POST["date"];

$dates=explode("-",$date);

echo $date,"<br>";

// echo date('l',mktime(1,1,1,$dates[1],$dates[2],$dates[0]));

$ru = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];

echo $ru[date('l',mktime(1,1,1,$dates[1],$dates[2],$dates[0]))];

// $dates =array_reverse($dates);
// $makeDate=mktime($dates[0],$dates[1],);



// echo strtotime("now");

// print_r($date);
// echo date('d-m-Y',mktime($date));





// echo date('Y,m,d', strtotime($date));
// echo date('Y,m,d',);
// echo strtotime(date('Y,m,d'),$date);
// echo date($date,'Y,m,d');

