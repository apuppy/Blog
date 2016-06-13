<?php
function addSelf($num){
	$result = $num + $num;
	return $result;
}

$numbers = [1,2,3,5];
$newNumbers = array_map('addSelf',$numbers);
print_r($newNumbers);
