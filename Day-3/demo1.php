<?php
	echo"<table>";
for($i=0;$i<=10;$i++)
{
echo"<tr>";
	if($i%2==0)
	{
		echo"<td bgcolor='red'>$i</td>";
	}
	else
	{
		echo"<td bgcolor='yellow'>$i</td>";
	}
	echo"</tr>";
}
echo"</table>";
?>