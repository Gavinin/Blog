<?php

include_once("./database.php");
getConnect();

$userEmail = $_POST['useremail'];
$password = $_POST['password'];
$loginSQL = "select id from user_info where useremail='$userEmail' and userpsw='$password'";
$resultLogin = mysqli_query($databaseConnection, $loginSQL);
if (mysqli_num_rows($resultLogin) > 0) {
    $user_id = mysqli_fetch_assoc($resultLogin);
    session_start(); // 初始化session
    $_SESSION['id'] = $user_id['id']; //保存某个session信息
    $_SESSION['email'] = $userEmail;
    echo "<script>alert('登陆成功')</script>";
    $url = "../index.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "<script>alert('登陆失败')</script>";
   $url = "../login.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
}
closeConnect();
?>
