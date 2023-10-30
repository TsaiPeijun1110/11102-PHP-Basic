<?php
date_default_timezone_set("Asia/Taipei");
//如果帳號跟密碼填正確且按登入後,會把頁面導到"登入成功"頁面
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    setcookie("login","tsai",time()+60);

    header("location:member.php");
    
}else{
    setcookie('error',"帳號密碼錯誤,請重新登入",time()+5);
    header("location:login.php");  
}
?>