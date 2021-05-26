<?php
$a=1;
$b=1;
$n=0;
echo"Fibonnaci series are...<br>";
echo $a." ".$b." ";

while($n <=10)
{
	$c=$a+$b;
	echo $c." ";
	$a=$b;
	$b=$c;
	$n++;
}


?>