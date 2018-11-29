<?php
header("content-type:text/html;charset=utf8");

//循环m,n之间的数
for ($i=100; $i <=999 ; $i++) { 
	$res = lj($i);
	if(isset($res))
	{
		var_dump($res);
	}
	
}


function lj($str)
{
	//取每位数上的值
	$a = $str/100%10;
	$b = $str/10%10;
	$c = $str%10;
	//计算并判断
	$res = $a*$a*$a+$b*$b*$b+$c*$c*$c;
	if($res == $str)
	{
		//返回
		return $res;
	}else
	{
		// return '失败';
	}
}


















?>