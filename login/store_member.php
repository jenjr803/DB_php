<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn, 'root', '');

$acc=$_POST['acc'];
// $acc=chkAcc($acc);

$sql="INSERT INTO `users` (`acc`,`pw`,`birthday`,`passnote`,`email`) 
                    values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['birthday']}','{$_POST['passnote']}','{$_POST['email']}');";

$pdo->exec($sql);

header('location:login.php');
?>