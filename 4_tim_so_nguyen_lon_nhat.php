<?php
	$arr = array(1,4,2,6,9,100,45,8,20);
	$length = count($arr);
	$max = $arr[0];
	$vitri;
	for ($i=0; $i <$length; $i++) 
	{ 
		if ($arr[$i]>$max) 
		{
			$max=$arr[$i];
			$vitri=$i;
		}
	}
	echo "<h1> max = ".$max." tại "."arr[".$vitri."]";
?>