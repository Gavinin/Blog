<?php

$databaseConnection = null;
    function getConnect() {
        $hosthome = "localhost";
        $userName = "root";
        $password = "qq1825084282";
        $list = "users";
        global $databaseConnection;
        $databaseConnection = mysqli_connect($hosthome, $userName, $password, $list) or die (mysqli_error());
        mysqli_query($databaseConnection,"set names utf8");
//        return $databaseConnection;
    }

    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            @mysqli_close($databaseConnection) or die (mysqli_error());
        }
    }


?>