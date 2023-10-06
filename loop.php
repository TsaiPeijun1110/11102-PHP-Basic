<!-- for(起始值;條件式;增減值){
     程式碼 
} -->

<?php
$sum=0;

for($i=1;$i<=10000;$i=$i++){
    // $sum=$sum+$i;
    echo '當$i='.$i."時";
    echo '$sum+$i的結果是';
    echo $sum ."+".$i."=";
    echo $sum+$$i;
    echo '<br>';
    $sum += $i;
}

echo "1加到10000為" .$sum;