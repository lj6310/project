<?php

print_r(Add(5002512, 1));


function Add($num1, $num2){
	$arr[] = $num1;
	$arr[] = $num2;
	$res = array_sum($arr);
	return $res;
}


?>