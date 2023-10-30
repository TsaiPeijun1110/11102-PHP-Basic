<?php
include_once "session.php";
date_default_timezone_set("Asia/Taipei");
//如果帳號跟密碼填正確且按登入後,會把頁面導到"登入成功"頁面
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    $_SESSION['login']=$_POST['acc'];

    header("location:member.php");
    
}else{
    $_SESSION['error']="帳號密碼錯誤,請重新登入";
    header("location:login.php");  
}
?>
