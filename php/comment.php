<?php
include_once("./database.php");
getConnect();
$getsql = getConnect();
session_start();
$userEmail = $_SESSION['email'];
$query = "select username from user_info where useremail = '$userEmail'";
$userName = mysqli_fetch_assoc(mysqli_query($databaseConnection, $query));
$userName = $userName['name'];
$comment = $_POST["comment"];
$commentSQL = "insert into comment values(null, '$userEmail','$comment')";
 if(mysqli_query($databaseConnection,$commentSQL)){
     echo "评论成功！" . $userEmail;
     echo "<script language='javascript' type='text/javascript'>"; 
    echo "window.location.href='../albums.php'"; 
    echo "</script>";
    } else {
        exit("评论失败！");
        echo "<script language='javascript' type='text/javascript'>"; 
    echo "window.location.href='../albums.php'"; 
    echo "</script>";
    }
?>



