<?php
// echo "сегодня"," ";
// echo date(' d m Y ');
$sumdays=0;
$day=date('d');

$month=date('F');

if(date("L")==1){
    echo "До нового года - ". 366 - date("z"). " Дней" ;
}
if(date("L")==0){
    echo "До нового года - ". 365 - date("z"). " Дней";
}





// $daysInMonth=['January'=>31,'February'=>28,'March'=>31,'April'=>30,
// 'May'=>31,'June'=>30,'July'=>31,'August'=>31,'September'=>30,
// 'October'=>31,'November'=>30,'December'=>31,];

// foreach ($daysInMonth as $key=> $value) {
//     // $sumdays=$sumdays+$value;
//     if ($key==$month) {
//         $daysInMonth[$month]=$daysInMonth[$month]-$day;
//         $sumdays=$sumdays+$value;
//     }
// }
