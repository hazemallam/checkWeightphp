<?php

function checkWeight($arr, $num)
{
	$front = 0;
	$back = sizeof($arr) - 1;
	while ($front <= $back)
	{
		if ($arr[$front] == $num ||
			$arr[$back] == $num)
		return true;
		$front++;
		$back--;
	}
	return false;
}
	$arr = array(2,15,12,1,4,5);
	$num = 6;
	if (checkWeight($arr, $num))
		echo "true";
	else
		echo "false";
?>
