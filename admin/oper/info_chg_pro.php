<?php
$databaseConnection = mysqli_connect('127.0.0.1', 'root', 'qq1825084282', 'users') or die(mysqli_error());
session_start();
$user_id = $_SESSION["user_select"];
$row='';
if(isset($user_id)){
    
    $show_origin = "select userpro from user_info where useremail = '$user_id'";
    $result = mysqli_query($databaseConnection,$show_origin);
    $row = mysqli_fetch_array($result);
}

if (isset($_GET["userpro_new"])) {
    $userpro_new = $_GET["userpro_new"];
    $sql = "update user_info set userpro = '$userpro_new'where useremail = '$user_id'";
    if (mysqli_query($databaseConnection, $sql)) {
        echo "<script>alert('修改成功！')</script>";
        echo "<script language='javascript'>";
        echo " location='../userinfo_mg.php ';";
        echo "</script>";
    }
}
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Management</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../../assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

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
                        <form method="get" action="info_chg_pro.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="id" id="sign_name" value="<?= $row["userpro"] ?>" readonly="readonly">

                                    <select name="userpro_new" id="demo-category">
                                        <option value="">- Profession -</option>
                                        <option value="Student">Student</option>
                                        <option value="Worker">Worker</option>
                                        <option value="Other">Other</option>

                                    </select>
                                </div>
                                <p>&nbsp;</p>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="change" class="primary"></li>

                                        <li><a href="../userinfo_mg.php" class="button">cancle</a></li>

                                    </ul>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>
            </article>



        </div>

        <!-- Scripts -->
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/jquery.scrollex.min.js"></script>
        <script src="../../assets/js/jquery.scrolly.min.js"></script>
        <script src="../../assets/js/browser.min.js"></script>
        <script src="../../assets/js/breakpoints.min.js"></script>
        <script src="../../assets/js/util.js"></script>
        <script src="../../assets/js/main.js"></script>

    </body>
</html>
