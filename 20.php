<?php

$x = 4;
$y = 4;
print_r(CountSteps($x,$y));



function CountSteps($x,$y)
{
	if($x ==0 && $y == 0)
	{
		return 0;
	}
	if($x == 1 || $y == 1)
	{
		return 1;
	}
	return CountSteps($x-1,$y)+CountSteps($x,$y-1);
}







?>