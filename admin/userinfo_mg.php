<!DOCTYPE HTML>
<?php
include_once './database.php';
getConnect();
//session_start();
//if(isset($_SESSION["user_select"])){
//    
//   $userEmail = $_SESSION["user_select"] ;
//}
if(isset($_POST["useremail"])){
    $userEmail_ori = addslashes($_POST["useremail"]);
}
$getsql = "select * from user_info where userEmail = '$userEmail_ori'";
$sql = mysqli_query($databaseConnection, $getsql);

if ($sql) {
    $row = mysqli_fetch_array($sql);
    $userEmail='';
    $userEmail=$row["useremail"];
    $userPsw = '';
    $userPsw =  $row["userpsw"];
    $userName = '';
    $userName = $row["username"];
    $userSex = '';
    $userSex = $row["usersex"];
    $userPro = '';
    $userPro = $row["userpro"];
}//取数据库值
?>
<html>
    <head>
        <title>My</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1><a href="index.php">Gavin</a></h1>

            </header>

            <!-- Main -->
            <article id="main">
                <header>
                    <h2>About Me</h2>
                    <p>&nbsp;</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner">
                        <section>
                            <div class="table-wrapper">
                                <table>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><?= $userName ?></td>
                                            <td><a class="button small" href="oper/info_chg_name.php?id=<?=$userName?>">Change</a></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><?= $userPsw ?></td>
                                            <td><a class="button small" href="oper/info_chg_psw.php?id=<?=$userPsw?>">Change</a></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?= $userEmail ?></td>
                                            <td><a class="button small" href="oper/info_chg_email.php?id=<?=$userEmail?>">Change</a></td>
                                        </tr>
                                        <tr>
                                            <td>Sex</td>
                                            <td><?= $userSex ?></td>
                                           <td><a class="button small" href="oper/info_chg_sex.php">Change</a></td>
                                        </tr>
                                        <tr>
                                            <td>Professor</td>
                                            <td><?= $userPro ?></td>
                                            <td><a class="button small" href="oper/info_chg_pro.php?id=<?=$userPro?>">Change</a></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="col-12">
                                <a href="username_inp.php" class="button">cancle</a>
                                
                            </div>


                    </div>
                </section>
        </div>
    </section>
</article>



</div>

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