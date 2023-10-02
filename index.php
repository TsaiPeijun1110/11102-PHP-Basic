<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$age='a=50;';
$name='b=10;';

echo $age;
echo $name;

$tmp=$age;
$age=$name;
$name=$tmp;

// echo $age;
// echo $name;
?> 
<!-- 包在html裡的程式碼結尾需加?> -->
</body>
</html>
