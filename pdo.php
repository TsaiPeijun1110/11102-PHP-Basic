<?php
$dsn="mysql:host=localhost;
charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

// $sql="select * from students"; 
// $source=$pdo->query($sql); 
// $rows=$pdo->query($sql)->fetch();
// $sql="insert into `dept`(`code`,
//抓取資料庫裡的資料,並顯示出來


// `name`) values('801','會計科');";
// $pdo->query($sql);
//在資料庫裡新增一筆資料

// $sql="update `dept` set `code`='901', 
// `name`='演藝科' where `dept_id`='10'";
// $pdo->query($sql);
//修改資料庫裡的一筆資料


// $sql="delete from `dept` where `dept_id`='8'";
// $pdo->query($sql);
//刪除資料庫裡一筆資料


$sql="delete from `dept` where `dept_id`='6'";
echo $pdo->exec($sql);

