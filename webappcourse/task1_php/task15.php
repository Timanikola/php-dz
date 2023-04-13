<?php
$arr=[10,-15,20,-40,50,-35];
$sumTrue=0;
$sumFalse=0;

foreach ($arr as $value) {
    if ($value>0) {
        $sumTrue=$sumTrue+$value;
    }
    if ($value<0) {
        $sumFalse=$sumFalse+$value;
    }
}
echo"<br>",$sumTrue;
echo"<br>",$sumFalse;