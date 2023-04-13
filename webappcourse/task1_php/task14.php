<?php
$arr=['Коля'=>200,'Вася'=>300,'Петр'=>400,];
foreach ($arr as $key => $value) {
    if ($value<=200) {
        echo $key," ",$value;
    }
}