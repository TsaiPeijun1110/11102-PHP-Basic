<?php

// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pr>";

echo $a[0];
echo $a[2];
echo "</pr>";

$b=[];
$b['姓名']='蔡佩君';
$b['最高學歷']='新北高工';
$b['tel']='095577332';
$b['星座']='魔羯座';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['星座'];


