<?php
//numerical array
//method 1
$a[0]=10;
$a[1]=30;
$a[2]="Raveena";
$a[3]="Kondle";
$a[4]="56.32";
echo "<font color=blue><h4>-> Method 1</h4></font>";
echo "$a[2] $a[3]";

//method 2
//index dynamic array
$a[]=10;
$a[]=30;
$a[]="Raveena";
$a[]="Kondle";
$a[]="56.32";
echo "<font color=blue><h4>-> Method 2</h4></font>";
echo "$a[1] $a[3]";

//method 3

$a=array(10,30,"Raveena","Kondle",30.25);
echo $a[2];
echo "<font color=blue><h4>Whole array</h4></font>";
for($i=0;$i<count($a);$i++){
    echo " $a[$i]<br/>";
}

//three inbuilt functions to debug array
echo "<font color=blue><h4>Inbuilt Function</h4></font>";
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>