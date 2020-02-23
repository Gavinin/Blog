<!DOCTYPE HTML>
<html>
    <head>
        <title>Management</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>
<?php 
session_start();
include_once 'database.php';
getConnect();
$ad_chk = $_SESSION["ad_chk"];
$query = "select * from admin_info where `key` = '$ad_chk'";
if(mysqli_query($databaseConnection, $query)){
    $main = <<<EOF
     <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <h1><a href="../index.php">Gavin</a></h1>
            </header>
            <!-- Main -->
            <article id="main">
                <header>
                    <h2>Manage</h2>
                    <p>&nbsp;</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner" style="margin:auto">

                        <form method="post" action="userinfo_mg.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="useremail" id="sign_email" value="" placeholder="Email" />
                                    <p>&nbsp;</p>
                                    <ul class="actions">
                                            <li><input type="submit" value="Select" class="primary" /></li>
                                        </ul>
                                </div></div></form>
                    </div>
                </section>
            </article>
        </div>
EOF;
echo $main;  
}else{
    echo 'ERROR!';
}

?>
    <body class="is-preload">
       

        <!-- Scripts -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.scrollex.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/browser.min.js"></script>
        <script src="../assets/js/breakpoints.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
