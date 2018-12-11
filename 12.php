<?php

print_r(Sum_Solution(100));


function Sum_Solution($n){
	$res = 0;
	$n && $res = $n+Sum_Solution($n-1);
	return $res;
}















?>
