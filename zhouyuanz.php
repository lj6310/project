<?php 

header("content-type:text/html;charset=utf8");

$n = 8;
$m = 3;
$res = LastRemaining_Solution($n, $m);
var_dump($res);

function LastRemaining_Solution($n, $m)
{
	$arr = range(0, $n-1);
	while (count($arr)>1) {
		for ($i=0; $i < $m; $i++) { 
			array_push($arr, array_shift($arr));
		}
		array_pop($arr);
	}
	return $arr[0];
}



// function LastRemaining_Solution($n, $m)
// {
// 	$res = 0;
// 	if($m == 1)
// 	{
// 		return $n;
// 	}
// 	for ($i=2; $i < $n; $i++) { 
// 		$res = ($res + $m) %$i;
// 	}
// 	return $res;
// }
?>