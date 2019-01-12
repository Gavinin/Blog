<?php

$databaseConnection = null;
    function getConnect() {
        $hosthome = "localhost";
        $userName = "root";
        $password = "qq1825084282";
        $table = "users";
        global $databaseConnection;
        $databaseConnection = mysqli_connect($hosthome, $userName, $password, $table) or die (mysqli_error());
        mysqli_query($databaseConnection,"set names utf8");
        if (!$databaseConnection) {
    die("could not connect to the database.\n" . mysqli_error());//诊断连接错误
}
    }

    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            @mysqli_close($databaseConnection) or die (mysqli_error());
        }
    }


?>