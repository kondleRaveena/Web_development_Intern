<?php
	
	$num1 = 22;
	$num2 = 52;
	$num3 = 10;
	
	echo "num1 = $num1 <br>";
	echo "num2 = $num2 <br>";
	echo "num3 = $num3 <br>";
	
	if($num1>=$num2 && $num1>=$num3)
	{
		echo "$num1 is Maximum out of three numbers <br>";
	}
	
	else if($num2>=$num3)
	{
		echo "$num2 is Maximum out of three numbers <br>";
	}
	
	else
	{
		echo "$num3 is Maximum out of three numbers <br>";
	}
	
	?>