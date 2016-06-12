<?php
function insertionShort($array){
    $len = count($array);
    for($i=1;$i<$len;$i++){
        $tmp = $array[$i];
        for($j=$i-1;$j>=0;$j--){
            if($tmp < $array[$j]){
                $array[$j+1] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array;
}

$arr = [1,0,3,5,4,7];
$res = insertionShort($arr);
print_r($res);