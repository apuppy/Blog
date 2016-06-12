<?php
function binarySearch($array,$search){
    $len = count($array);
    $low = 0;
    $high = $len - 1;
    while($low <= $high){
        $mid = floor(($high + $low)/2);
        if($array[$mid] > $search){
            $high = $mid - 1;
        }else if($array[$mid] < $search){
            $low = $mid + 1;
        }else{
            return $mid;
        }
    }
    return false;
}

$arr = [1,4,3,5,6];
$result = binarySearch($arr,9);
print_r($result);