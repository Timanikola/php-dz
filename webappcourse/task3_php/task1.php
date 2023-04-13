<?php
// $input=5;
function isNumberInRange($input){
    $input=5;
    $tf;
    if($input>0 && $input<10) {
       $tf=true;
       print_r($tf);
    }
    else {
        $tf=false;
        print_r($tf);
    }
};