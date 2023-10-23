<?php

$array=[3,2,7,10,30,17];
$score=[
    '姓名'=>'小明',
    '成績'=>98
];



// if(in_array(3,$array)){
//     echo "數字有在陣列中";
// }else{
//     echo "數字不在陣列中";
// } 



// $tmp=array_keys($array);
// $string=array_keys($score);
// echo "<pre>";
// print_r($tmp);
// echo"</pre>";
// print_r($string);
// echo"</pre>";

$ss="Today is a google day";
$tt=explode(" ",$ss);
print_r($tt);

$cc=implode("--",$tt);

echo $cc;


sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";


?>