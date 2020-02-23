<?php

include_once './database.php';
getConnect();
session_start();
$ad_email = $_SESSION["email"];
$ad_id = $_SESSION["id"];
$query = "select `key` from admin_info where( `email` = '$ad_email' and `key` = '$ad_id')";
if($row = mysqli_query($databaseConnection, $query)){
    $ad_chk_id = mysqli_fetch_assoc($row);
    
        if ($ad_chk_id['key'] == $ad_id){
            $_SESSION['ad_chk'] = $ad_id;
    $url = "index_mg.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
    
        
    } else {
        echo '<h1>ERROR!!</h1>';
    }
}

    