<style>
    table{
        border-collapse: collapse;
        border: 1px solid black;
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

















