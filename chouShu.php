<?php
header("content-type:text/html;charset=utf8");

$m = 6;
$res = GetUglyNumber_Solution($m);
var_dump($res);

function GetUglyNumber_Solution($str)
{
	$res = $str;
	//进行计算
	while($res%2 == 0)
	{
		$res = $res/2;
	}
	while($res%3 == 0)
	{
		$res = $res/3;
	}
	while($res%5 == 0)
	{
		$res = $res/5;
	}
	//返回数据
	if($res == 1)
	{
		return $str.'是丑数';
	}else
	{
		return $str.'不是丑数';
	}
}
?>