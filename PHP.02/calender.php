<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table {
            border: 3px double #999;
            border-collapse: collapse;
        }
        td {
            border: 2px solid #999;
            text-align: center;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <?php
     //把文字置中對齊
    echo "<h3 style='text-align:center'>";
   //在頁面中顯示西元年跟月跟把字體放大
    echo date("西元Y年m月");
    echo "</h3>";
    //取一個叫$thisMonth的變數,並使用date函數加上Y的參數,來取得2023年四位數字的年份
    $thisMonth = date("Y");
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("Y-m-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate)/ 7) ;
   $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    ?>
    <div style='width:264px;display:flex;margin:auto;justify-content:space-between'>
        <a href=''>上一個月</a>
        <a href=''>下一個月</a>
</div>
<table style='width:264px;display:block;margin:auto'>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        <?php
    for ($i = 0; $i<$weeks;$i++){
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            $addDays = 7 * $i+ $j;
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }
            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                echo date("j", $thisCellDate);
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>