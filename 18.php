<?php
var_dump(NumberOf1(511));

function NumberOf1($n)
{
	// $res = [];
	$num = 0;
	while ($n>0)
	{
		if($n%2==1 && $n>0)
		{
			// $res[] = 1;
			$num++;
			$n = floor($n/2);
		}
		if($n%2==0 && $n>0)
		{
			// $res[] = 0;
			$n = floor($n/2);
		}
	}
	// $res = array_reverse($res);
	// $res = implode('', $res);
	return $num;
}

?>