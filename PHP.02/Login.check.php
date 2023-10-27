<?php
//如果帳號跟密碼填正確且按登入後,會把頁面導到"登入成功"頁面
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    header("location:member.php?login=1");
    
}else{
    header("location:login.php?m=帳號或密碼錯誤,請重新登入");  
}
?>