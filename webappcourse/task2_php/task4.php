<?php
$ruMonth = [
    "Jan"=>'января',
    "Feb"=>'февраля',
    "Mar"=>'марта',
    "Apr"=>'апреля',
    "May"=>'мая',
    "Jun"=>'июня',
    "Jul"=>'июля',
    "Aug"=>'августа',
    "Sep"=>'сентября',
    "Oct"=>'октября',
    "Nov"=>'ноября',
    "Dec"=>'декабря'
];
$dates=explode(" ",date('j M o'));
$dates[1]=$ruMonth[$dates[1]];
$result=implode(" ",$dates);
echo $result ." года";