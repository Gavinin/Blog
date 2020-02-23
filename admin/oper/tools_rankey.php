<?php

include_once '../database.php';
getConnect();
$name ="admin@outlook.com";
$key = md5(uniqid(microtime(true),true));
$query = "update admin_info set key = '$key' where email = '$name'";
$query1 = "UPDATE admin_info
SET `key`='$key'
WHERE
	email = '$name';";
echo $key;
mysqli_query($databaseConnection,$query1);
