<?php

$databaseConnection = mysqli_connect('127.0.0.1', 'root', 'qq1825084282','users') or die(mysqli_error());
$getsql = "select * from user_info where userEmail = 'abcde@outlook.com'";
$sql = mysqli_query($databaseConnection, $getsql);
$row = mysqli_fetch_array($sql);
echo $row["usersex"];
//foreach ($row as $bbb){
//    echo $bbb;
//}