<h2>威力採電腦選號</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li完成選號後將陣列內容印出></li>
</ul>

<?php
/* $num=[];
for($i=0;$i<100;$i++){
    $tmp= rand(1,38);

    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
} */

$num=[];

while(count($num)<6){
    $tmp= rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
}
?>
<h2>找出五百年內的閏年</h2>
<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>

<?php
$years=[];

for($i=2023;$i<2523;$i++){
    if(($i%4==0 && $i%100 != 0)|| $i %400 ==0){ 
    $years[]=$i;         
   
 }
}
foreach ($years as $key=> $year) {
    echo $year .",";
}

?>