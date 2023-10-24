<h1>日期與時間</h1>
<?php
        // 日期 vs 時間
date_default_timezone_set('Asia/Taipei');

echo date("Y-m-N H:i:s");
?>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-m H:i:s",$time);

$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo "<br>";
echo $date1.'到'.$date2."有" . $days."天" ;
?>

<h2>計算下次生日的天數</h2>
<?php
$date="1974-10-07";
$br=strtotime($date);
$diff=strtotime(date("Y")."_".date("m-d",$br));
$today=strtotime('now');
if($diff>$today){
    $days=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}
echo "距離下一次的生日:".date("Y-m-d",$diff)."還有". floor($days)."天";
 

