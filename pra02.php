<style>
    table{
        border-collapse: collapse;
        border: 1px solid palevioletred;
    }
    td{
        border: 1px solid thistle;
        padding: 3px 9px;
    }
    h3{
        color: darkorchid;
    }
</style>
<h3>99乘法表</h3>
<?php

echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for ($i=1;$i<=9;$i++){
    echo "<td>";
    echo $j.' *'.$i.'='.($j*$i);
    echo "</td>";
    echo "<td>";
    echo $j . '*'.$i.'='.($j*$i);
    echo "</td>"; 
}
    echo "</tr>";
}
echo "</table>";

?>
<h3>99乘法表-有標頭</h3>
<?php
echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#ccc'>";
    }else{
    echo "<tr>";
}
    for($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#ccc'>";
        }else{
        echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
        echo $j*$i;
        }

        echo "</td>";      
    }
    echo "</tr>";
}
echo "</table>";
?>


<h3>99乘法表-留左下區</h3>
<?php
echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#ccc'>";
    }else{
    echo "<tr>";
}
    for($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#ccc'>";
        }else{
        echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else if($j<$i){ 
        echo "";
        }else{
        echo $j*$i;
        }
        echo "</td>";      
    }
    echo "</tr>";
}
echo "</table>";
?>



















