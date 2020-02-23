<?php

include_once("./database.php");
getConnect();

$userPsw = $_POST['userPsw'];
$confirmPassword = $_POST['userPsw_re'];
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userSex = $_POST['userSex'];
$userPro = $_POST['userPro'];
$userKey = md5(uniqid(microtime(true),true));

if (empty($_POST)) {
    exit("您提交的表单数据超过post_max_size! <br>");
}

// 判断输入密码与确认密码是否相同
if ($userPsw != $confirmPassword) {
    echo "<script>alert('输入密码不相同')</script>！";
    echo "<script language='javascript'>"; 
        echo " location='../signup.html ';"; 
        echo "</script>";
        exit();
}

// 判断email是否重复
$userEmailSQL = "select * from user_info where userEmail = '$userEmail'";
getConnect();
$resultSet = mysqli_query($databaseConnection, $userEmailSQL);
if (mysqli_num_rows($resultSet) > 0) {
    echo "<script>alert('Email已经存在')</script>";
    echo "<script language='javascript'>"; 
        echo " location='../signup.html ';"; 
        echo "</script>";
        exit();
} else {

    $registerSQL = "insert into user_info values('$userKey', '$userEmail','$userName ','$userPsw', '$userSex', '$userPro')";
    if (mysqli_query($databaseConnection, $registerSQL)) {
        session_start();
        $_SESSION["email_reg_new"] = $userEmail;
        echo "<script language='javascript'>"; 
        echo " location='../thanks.php ';"; 
        echo "</script>";
    } else {
        echo "<script language='javascript'>"; 
        echo " location='../signup.html ';"; 
        echo "</script>";
        exit("用户注册失败！");
    }
}
closeConnect();
