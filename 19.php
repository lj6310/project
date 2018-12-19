<?php
//循环
$arr = [1,3,5,8,9,10,15,17,19,21,52];
$num = 15;
print_r(lj($arr,$num));

function lj($arr,$num)
{
	$low = 0;
	$hig = count($arr)-1;
	while ($low<=$hig) {
		$mid = intval(($low+$hig)/2);

		if($arr[$mid] > $num)
		{
			$hig = $mid-1;
		}else if($arr[$mid] < $num)
		{
			$low = $mid+1;
		}else{
			return $mid;
		}
	}
	// return $hig;
}



//递归
$arr = [1,3,5,8,9,10,15,17,19,21,52];
$num = 15;
$low = 0;
$hig = count($arr)-1;
print_r(lj1($arr,$num,$low,$hig));

function lj1($arr,$num,$low,$hig)
{
	if($low>$hig)
	{
		return -1;
	}
	$mid = intval(($low+$hig)/2);
	if($arr[$mid]>$num)
	{
		return lj1($arr,$num,$low,$mid-1);
	}else if($arr[$mid]<$num)
	{
		return lj1($arr,$num,$mid+1,$hig);
	}else{
		return $mid;
	}

}

?>