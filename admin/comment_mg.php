<?php ?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Comment_mg</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Page Wrapper -->
        <div id="page-wrapper">



            <!-- Main -->
            <article id="main">
                <header>
                    <h2>Manage</h2>
                    <p>&nbsp;</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner" style="margin:auto">
                        <section>   
                            <h4>User Manage</h4>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>    

                                            <th>Name</th>
                                            <th>Comment</th>
                                            <th>Operate</th>

                                        </tr>
                                    </thead>
                                    <tbody><?php
session_start();
$ad_chk = $_SESSION['ad_chk'];
$query = "select `key`  from admin_info where `key` = '$ad_chk' ";
if (mysqli_query($databaseConnection, $query)) {
    include_once 'database.php';
    getConnect();
    $select = "select * from comment order by id desc limit 0,10";
    $result = mysqli_query($databaseConnection, $select);
    $i = 1;
    $com_num = array();
    while ($comment_row = mysqli_fetch_assoc($result)) {
        $com_num[$i] = $comment_row['id'];
    }
    ?>
                                            <tr>    
                                                <td><?= $comment_row['userEmail'] ?></td>
                                                <td><?= $comment_row['comment'] ?></td>
                                                <td>
                                                    <a class="button small" href="oper/delete.php?id=<?= $com_num[$i] ?>">Delete</a>
                                                </td>
                                            </tr>
    <?php
    $i++;
}
?>
                                    </tbody>

                                </table>
                            </div>


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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.scrollex.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/browser.min.js"></script>
        <script src="../assets/js/breakpoints.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
