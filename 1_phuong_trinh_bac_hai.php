<?php

	$a =1.2;
	$b =4.4;
	$c =2.0;
	echo "<h1>";
	echo "$a"." * x2 +"."$b"."*x +"."$c"." =0";
	if ($a==0) 
	{
		if ($b==0) 
		{
			if ($c==0) 
			{
				echo "<br> Phương trình có vô số nghiệm";
			}
			else
				echo "<br> Phương trình vô nghiệm";
		}
		else
			echo "<br> Phương trình có 1 nghiệm là x =".(-$c/$b);	
	}
	else
	{
		$Delta = ($b * $b) - 4 * $a * $c;
		if ($Delta <0) 
		{
			echo "<br> Phương trình vô nghiệm";
		}
		elseif ($Delta ==0) 
		{
			echo "<br> Phương trình có nghiệm kép là ".(-$b/2*$a);
		}
		else
			echo "<br> Phương trình có 2 nghiệm phân biệt là ".(-$b + sqrt($Delta))/(2*$a)." và ".(-$b - sqrt($Delta))/(2*$a);
	}

?>