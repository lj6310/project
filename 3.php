<?php
header("content-type:text/html;charset=utf8");
//调用方法
$res = lj('Have you ever gone shopping and');
var_dump($res);
//定义一个方法
function lj($str)
{
	//定义变量
	$res = '';
	$arr = [];
	//循环字符串
	for ($i=0,$len=strlen($str); $i <=$len ; $i++) { 
		//赋值并判断
		if(isset($arr[$str[$i]]))
		{
			$arr[$str[$i]]++;
		}else{
			$arr[$str[$i]] = 1;
		}
		if($arr[$str[$i]] == 3)
		{
			$res = $str[$i];
			break;
			// var_dump($res);
		}
	}
	//返回成功结果
	return $res;
}


?>