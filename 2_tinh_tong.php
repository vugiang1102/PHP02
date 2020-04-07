<?php
	function TinhGiaiThua($n)
	{
		/* cách 1 sd hàm thường
		$giaithua =1;
		if ($n==0 || $n==1) 
		{
			return $giaithua;
		}
		else
		{
			for ($i=0; $i <=$n ; $i++) 
			{ 
				$giaithua=$giaithua*i;
			}
			return $giaithua;
		}
		*/

		//c2 sd hàm đệ quy
		if ($n>0) 
		{
			return $n * TinhGiaiThua($n -1);
		}
		else
		{
			return 1;
		}
	}
	$n=4;
	echo "<h2> giai thừa của ".$n." là ".TinhGiaiThua($n);
	$tong=0.0;
	for ($i=0; $i <=$n ; $i++) 
	{ 
		$tong = $tong +($i)/TinhGiaiThua($i);
	}
	echo "<br> Kết quả =".$tong;
?>