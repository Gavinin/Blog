<!DOCTYPE HTML>
<?php
include_once("./php/database.php");
getConnect();
$select = "select * from index_info order by id desc limit 0,3";//倒叙查找3条记录
$result = mysqli_query($databaseConnection, $select);

$row1=mysqli_fetch_assoc($result);
$row2=mysqli_fetch_assoc($result);
$row3=mysqli_fetch_assoc($result);

mysqli_close($databaseConnection);

session_start();
$userEmail = '';
if(isset($_SESSION['email'])){
    $userEmail = $_SESSION['email'];
}
?>
<html>
	<head>
		<title>Gavin's Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Gavin</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
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

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>TRAVEL</h2>
							<p>This is personnal Photo Blog</p>
							<ul class="actions special">
								
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
                                                            <h2><a href="albums.php">ALBUM</a></h2>
								
							</header>
							<ul class="icons major">
								<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
                                                    <div class="image"><img src="<?= $row1["local"]?>" alt="" /></div><div class="content">
								<h2><?= $row1["title"]?></h2><!--数据库动态实现主页面展示 -->
                                                                <p><?= $row1["detail"]?></p>
								<p>&nbsp;</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?= $row2["local"]?>" alt="" /></div><div class="content">
								<h2><?= $row2["title"]?> </h2>
                                                                <p><?= $row2["detail"]?></p>
								<p>&nbsp;</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?= $row3["local"]?>" alt="" /></div><div class="content">
								<h2><?= $row3["title"]?></h2>
                                                                <p><?= $row3["detail"]?></p>
								<p>&nbsp;</p>
							</div>
						</section>
					</section>

				

<!--				 CTA 
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Arcue ut vel commodo</h2>
								<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>-->

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
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