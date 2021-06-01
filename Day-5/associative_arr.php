<?php
//associative array
//method 1
$a[0]=10;
$a[1]=30;
$a['fname']="raveena";
$a['lname']="kondle";
$a['floatno']="90.25";
echo "<font color=blue><h4>-> Method 1</h4></font>";
echo "name is ". $a['fname']." " .$a['lname'];

//method 2
$a=array(
    0 =>10,
    'fname' => "raveena",
    'lname' => "kondle",
    20 => "twenty",
);

echo "<font color=blue><h4>-> Method 2</h4></font>";
echo "fname is " .$a['fname'];

//whole array print
echo "<font color=blue><h4>-> Whole array value</h4></font>";
foreach($a as $value){
    echo "<br/>value is $value";
}

echo "<font color=blue><h4>-> Whole array</h4></font>";
foreach($a as $key => $value){
    echo "<br/> key is <b>$key</b> and value is <b>$value</b>";
}

echo "<font color=blue><h4>-> Inbuilt Function</h4></font>";
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>