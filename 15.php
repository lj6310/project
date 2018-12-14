<?php

var_dump(FirstNotRepeatingChar('dfsgdasjgfhsdkjaghkfhgidhfsighkjJHFASHJFGJA')); 

function FirstNotRepeatingChar($str){
	$arr = [];
	for ($i=0,$len = strlen($str); $i < $len; $i++) { 
		if(isset($arr[$str[$i]]))
		{
			$arr[$str[$i]]++;
		}else
		{
			$arr[$str[$i]] = 1;
		}
		// if($arr[$str[$i]] == 1)
		// {
		// 	echo $arr[$str[$i]];
		// }
	}
	foreach ($arr as $key => $value) {
		// echo $value;
		if($value == 1)
		{
			$res = $key;break;
		}
	}
	$res = strpos($str, $res);
	return $res;
	
}

?>