<?php

$databaseConnection = mysqli_connect('127.0.0.1', 'root', 'qq1825084282','users') or die(mysqli_error());
$id = $_GET["id"];
$sql = "delete from comment where id=$id";
if(mysqli_query($databaseConnection,$sql))
{
 echo "<script>alert('删除成功！')</script>";
    echo "<script language='javascript'>"; 
        echo " location='comment_mg.php ';"; 
        echo "</script>";
}