<!DOCTYPE HTML>
<?php
session_start();
$userEmail = "";
if(isset($_SESSION['email'])){
    $userEmail = $_SESSION['email'];
}
?>
<html>
    <head>
        <title>Login</title>
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
                                    <li><a href="about.php">about</a></li>
                                    <?php
                                                                                        if($userEmail){
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
                    <h2>Login</h2>
                    <p>&nbsp;</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner">
                        <section>

                            <form method="post" action="./php/login_proc.php">
                                <div class="row gtr-uniform">
                                    <div class="col-6 col-12-xsmall">
                                        <input type="email" name="useremail" id="sign_email" value="" placeholder="Email" />
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-6 col-12-xsmall">
                                        <input type="password" name="password" id="sign_psw" value="" placeholder="Password" />
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="Login" class="primary" /></li>

                                            <li><a href="signup.html" class="button">Signup</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>

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