<?php
function bubbleSort($arr) {
    $n = count($arr);
    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++) {
            if($arr[$j] < $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [3,0,1,5,4,7];
print_r(bubbleSort($arr));