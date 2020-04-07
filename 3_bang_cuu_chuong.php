<table border="5px">   // tạo bảng với mỗi hàng 3 pixel
	<tr>
		<?php
			for ($i=1; $i <=10 ; $i++) 
			{ 
				echo "<td>";        // để cắt sang cột tiếp
				for ($j=1; $j <=10 ; $j++) 
				{ 
					echo "$i * $j = ".($i * $j);
					echo "<br>";
				}
				echo "</td>";
			}
		?>
	</tr>
</table>

