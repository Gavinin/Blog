<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-42000, '/');}
session_destroy();
if ($_GET['page']) {
    $page = $_GET['page'];
     $url = "$page";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
}
 $url = "../index.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
?>

