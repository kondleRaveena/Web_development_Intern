<?php
echo "<font color=red><center><h1>ARRAY FUNCTION</h1></center></font>";
$a=array("apple","mango","banana","strawbarry","orange","blackbarry","watermalon","mango");

//count function
echo "<p><font color=blue>count function</font></p>";
echo "total count : ".count($a);

//array_count_values function
echo "<p><font color=blue>array_count_values function</font></p>";
$newarr=array_count_values($a);
foreach($newarr as $key => $value){
    echo " $key -> <strong>$value</strong><br/>";
}

//array_sum function
echo "<p><font color=blue>array_sum function</font></p>";
$arr= array(20,40,30,50,45,80);
echo array_sum($arr);

//array_product function
echo "<p><font color=blue>array_product function</font></p>";
echo array_product($arr);

//array_reverse function
echo "<p><font color=blue>array_reverse function</font></p>";
$revarr=array_reverse($a);
print_r($revarr);

//in_array function
echo "<p><font color=blue>in_array function</font></p>";
$temp = in_array('mango',$a);

echo  $temp;

//array_rand function
echo "<p><font color=blue>array_rand function</font></p>";
$indexofarray = array_rand($a);
echo $a[$indexofarray];

//select multiple keys at random
echo "<p><font color=blue>select multiple keys at random</font></p>";
$indexofarray = array_rand($a,2);
foreach($indexofarray as $key => $value){
    echo "<br/>$key -> <strong>". $a[$value] . "</strong>";
}

//array_unique function
echo "<p><font color=blue>array_unique function</font></p>";
echo "<pre>";
print_r(array_unique($a));
echo "<pre>";

//array_merge function
echo "<p><font color=blue>array_merge function</font></p>";
$merge=array_merge($a,$arr);
echo "<pre>";
print_r($merge);
echo "<pre>";

//array_search function
echo "<p><font color=blue>array_search function</font></p>";
$check=array_search('mango',$a);
echo $check;

//range function
echo "<p><font color=blue>range function</font></p>";
$range=range('a','z');
echo "range between a-z<br/>";
foreach($range as $key => $value){
    echo " <br/> $key -> $value";
}
echo "<br/>";
$range=range('11','20');
echo "<br/>range berween 11-20<br/>";
foreach($range as $key => $value){
    echo " <br/> $key -> $value";
}

//sort function
echo "<p><font color=blue>sort function</font></p>";
sort($arr);
print_r($arr);

//rsort function
echo "<p><font color=blue>rsort function</font></p>";
rsort($arr);
print_r($arr);

//asort function
echo "<p><font color=blue>asort function</font></p>";
asort($arr);
print_r($arr);

//ksort function(key sort)
echo "<p><font color=blue>ksort (key sort) function</font></p>";
$sorting=array(
    "banana" => "yellow",
    "apple" => "red",
    "mango" => "green"
);
ksort($sorting);
foreach($sorting as $key => $value){
    echo "<br/> $key -> $value";
}

//krsort function(key reverse sort)
echo "<p><font color=blue>krsort (key reverse sort) function</font></p>";
krsort($sorting);
foreach($sorting as $key => $value){
    echo "<br/> $key -> $value";
}

//shuffle function
echo "<p><font color=blue>shuffle function</font></p>";
shuffle($a);
foreach ($a as $key => $value){
    echo " $value <br/>";
}

//array_key_exists function
echo "<p><font color=blue>array_key_exists function</font></p>";
$exist=array("r" => "raveena", "k" => "kondle");
echo array_key_exists('r',$exist);

//array_change_key_case function
echo "<p><font color=blue>array_change_key_case function</font></p>";
$uppercase=array_change_key_case($sorting,CASE_UPPER);
print_r($uppercase);

//array_combine function
echo "<p><font color=blue>array_combine function</font></p>";
$a1=array("nimisha","raveena","rushali","drashti");
$a2=array("blue","red","yellow","green");
$newvar=array_combine($a1,$a2);
print_r($newvar);

//end function
echo "<p><font color=blue>end function</font></p>";
echo end($a2);

//compact function
echo "<p><font color=blue>compact function</font></p>";
$name="raveena";
$subject="php";
$compact=compact("name","subject");
print_r($compact);

//array_flip function
echo "<p><font color=blue>array_flip function</font></p>";
$fliparr=array_flip($sorting);
print_r($fliparr);

//array_diff function
echo "<p><font color=blue>array_diff function</font></p>";
$b1=array("raveena","kondle","nimisha","soni","pinal","sevwala");
$b2= array("raveena","pinal","soni");
$diff=array_diff($b1,$b2);
print_r($diff);

//array_intersect function
echo "<p><font color=blue>array_intersect function</font></p>";
print_r(array_intersect($b1,$b2));

//array_values function
echo "<p><font color=blue>array_values function</font></p>";
$arrvalue=array_values($sorting);
foreach($arrvalue as $key => $value){
    echo "$key -> $value<br/>";
}

//array_push function
echo "<p><font color=blue>array_push function</font></p>";
$name1=array("nimisha","raveena");
array_push($name1,"rushali","drashti");
print_r($name1);

//array_pop function
echo "<p><font color=blue>array_pop function</font></p>";
$name2=array("nimisha","raveena","rushali","drashti");
array_pop($name2);
print_r($name2);
array_pop($name2);
print_r($name2);

//explode function
echo "<p><font color=blue>explode function</font></p>";
$explodestr="my name is raveena";
$string=explode(" ",$explodestr);
print_r($string);

//implode function
echo "<p><font color=blue>implode function</font></p>";
$mystr=array("my","name","is","raveena");
$str=implode(" ",$mystr);
echo $str;





?>