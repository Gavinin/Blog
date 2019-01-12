<!DOCTYPE HTML>
<?php
include_once("./php/database.php");
getConnect();
session_start();
$userEmail = $_SESSION["email"];
$getsql = "select * from user_info where userEmail = '$userEmail'";
$sql = mysqli_query($databaseConnection, $getsql);
if ($sql) {
    $row = mysqli_fetch_assoc($sql);
    $userName = $row["username"];
    $userSex = $row["usersex"];
    $userPro = $row["userpro"];
}//取数据库值
?>
<html>
    <head>
        <title>My</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1><a href="index.php">Gavin</a></h1>
                <nav id="nav">
                    <ul>
                        <li class="special">
                            <a href="#menu" class="menuToggle"><span>Menu</span></a>
                            <div id="menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="albums.php">Albums</a></li>
                                     <?php
                                                                                        if (isset($_SESSION['email'])){    
                                                                                            echo'<li><a href="php/logout_proc.php">Logout</a></li>';
                                                                                        } else {
                                                                                            echo'<li><a href="login.php">Log In</a></li>';
                                                                                        }
                                                                                        ?>
                                    <li><a href="about.php">about</a></li>
                                    <?php
                                    if ($userEmail) {
                                        echo "<li><a href='my.php'>Me</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>

            <!-- Main -->
            <article id="main">
                <header>
                    <h2>About Me</h2>
                    <p>&nbsp;</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner">

                        <div class="col-6 col-12-medium">

                            <ul class="alt">
                                <li>Name:<?= $userName ?></li>
                                <li>Email:<?= $userEmail ?>.</li>
                                <li>Sex:<?= $userSex ?></li>
                                <li>Professer:<?= $userPro ?></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </article>

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
                <ul class="copyright"><li></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>