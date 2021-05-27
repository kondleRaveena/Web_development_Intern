<html>
<?php
$eng=$_POST['eng'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$hindi=$_POST['hindi'];
$gujarati=$_POST['gujarati'];
echo"English=$eng<br>";
echo"Maths=$maths<br>";
echo"Science=$science<br>";
echo"Hindi=$hindi<br>";
echo"Gujarati=$gujarati<br>";

$marks=$eng+$maths+$science+$hindi+$gujarati;
echo"Total marks=$marks<br>";
if($marks>=80)
{
	echo"<h1>First Class</h1><body bgcolor='green'><br>";
}
else if($marks>=70)
{
	
	echo"<h1>Second Class</h1><body bgcolor='orange'>";
}
else if($marks>=50)
{
	
	echo"<h1>Pass<h1><body bgcolor='yellow'>";
}
else
{
	echo"<h1>Fail</h1><body bgcolor='red'>";
}
?>
</html>