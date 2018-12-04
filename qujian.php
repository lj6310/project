<?php
//header头
header("content-type:text/html;charset=utf8");

$n = 100;
$m = 1300;
$res = calFn($n,$m);
var_dump($res);

function calFn($n,$m)
{
	$res = 0;

	for ($i=$n; $i <= $m; $i++) { 
		$num = $i;
		while ($num) {
			if($num%10 == 1)
			{
				$res++;
			}
			$num = floor($num/10);
		}
	}

	return $res;
}
?>