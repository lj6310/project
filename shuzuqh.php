<?php 
header("content-type:text/html;charset=utf8");

$numbers = [3,32,321];
$res = PrintMinNumber($numbers);
var_dump($res);

function PrintMinNumber($numbers)
{
	for ($i=0,$len=count($numbers); $i < $len; $i++) { 
		for ($j=$i+1,$len=count($numbers); $j < $len; $j++) { 
			if(intval($numbers[$i].''.$numbers[$j]) > intval($numbers[$j].''.$numbers[$i]))
			{
				$tmp = $numbers[$i];
				$numbers[$i] = $numbers[$j];
				$numbers[$j] = $tmp;
			}
		}
	}
	$res = implode('', $numbers);
	return $res;
}

?>