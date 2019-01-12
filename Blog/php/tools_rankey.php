<?php

include_once 'database.php';
getConnect();
$name ="admin@outlook.com";
$key = md5(uniqid(microtime(true),true));
$query1 = "UPDATE user_info
SET `id`='$key'
WHERE
	username = 'liming';";
echo $key;
mysqli_query($databaseConnection,$query1);
