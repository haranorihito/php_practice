<?php
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array(array(3,7,6,9,1));


function arr($array){
    $result = 1;
    foreach($array as $num){
        $result *= $num;
    }
    return $result;
}
echo arr(array(1,3,5,7,9));
        