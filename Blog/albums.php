<!DOCTYPE HTML>
<?php
include_once ("php/database.php");
getConnect();
session_start();
$userEmail = 'Please login';
if (isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email'];
}
?>
<html>
    <head>
        <title>Albums</title>
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
                                     <?php
                                                                                        if (isset($_SESSION['email'])){
                                                                                            
                                                                                            echo'<li><a href="php/logout_proc.php">Logout</a></li>';
                                                                                        } else {
                                                                                            echo'<li><a href="login.php">Log In</a></li>';
                                                                                        }
                                                                                        ?>
                                    <li><a href="about.php">about</a></li>
                                    <?php
                                    if ($userEmail != 'Please login') {
                                        echo "<li><a href='my.php'>Me</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>


            <!--				 Main -->
            <article id="main">

<!--						<section class="wrapper style5">-->
                <div class="inner">
                    <section>

                        <div class="box alt">
                            <div class="row gtr-50 gtr-uniform">
                                <div class="col-12"><span class="image fit"><img src="images/banner.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                <div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
                            </div>
                        </div>
                        <div style="margin: 25px;">
                            <h5>Left &amp; Right</h5>
                            <p><span class="image left"><img src="images/pic04.jpg" alt="" /></span>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien. Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>
                            <p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius. Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam, semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus aliquet erat. Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget, fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui.</p>
                            <p><span class="image left"><img src="images/pic04.jpg" alt="" /></span>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien. Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>
                            <p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius. Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam, semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus aliquet erat. Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget, fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui.</p>
                        </div>	
                    </section>
                </div>
                <?php
                if (isset($userEmail)) {
                    ?>
                    <form method="post" action="php/comment.php">
                        <div style="margin: 25px;" class="col-12">
                            <textarea  name="comment" id="demo-message" placeholder="Enter your idea" rows="6"></textarea></div>
                        <div style="margin: 25px;" class="col-12">

                            <ul class="alt">
                                <li><?= $userEmail ?></li>
                            </ul>

                            <ul class="actions">
                                <?php
                                if ($userEmail == 'Please login') {
                                    print <<<EOT
													<li><span class="button primary disabled">Send Message</span></li>
EOT;
                                } else {
                                    print <<<EOT
													<li><input type="submit" value="Send Message" class="primary" /></li>
EOT;
                                }
                                ?>                                                                                                        
                            </ul>
                        </div>
                    </form>
                    <?php
                }
                ?>
                <div style="margin: 25px;" class="col-12">
                    <section>
                        <h4>The New</h4>

                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>

                                    </tr>
                                </thead>
                                <tbody><?php
                                    include_once './php/database.php';
                                    getConnect();

                                    $select = "select * from comment order by id desc limit 0,10";
                                    $result = mysqli_query($databaseConnection, $select);
                                    while ($comment_row = mysqli_fetch_assoc($result)) {
                                        $userEmail = $comment_row['userEmail'];
                                        $query = "select username from user_info where useremail = '$userEmail'";
                                        $userName = mysqli_fetch_assoc(mysqli_query($databaseConnection, $query));
                                        ?>
                                        <tr>
                                            <td><?= $userName['username'] ?></td>
                                            <td><?= $comment_row['comment'] ?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>


                    </section>
                </div>

                <!--</section>-->
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
                <ul class="copyright">

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