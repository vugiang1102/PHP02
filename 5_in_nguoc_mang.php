	<?php
	$arr = array(1,4,2,6,9,100,4);
	krsort($arr);
	for ($i=count($arr)-1; $i >=0 ; $i--) 
	{ 
		echo "  ".$arr[$i];
	}
?>


