<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['email'])){
    $userEmail = $_SESSION['email'];
}
?>
<html>
	<head>
		<title>About</title>
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
						
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>About</h2>
							<p>&nbsp;</p>
						</header>
						<section class="wrapper style5">
							<div style="margin:0 auto;" class="inner">

								<h3>Lorem ipsum dolor</h3>
								<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

								<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

								<hr />

								<h4>Feugiat aliquam</h4>
								<p>Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam, semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus aliquet erat.</p>

								<p>Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget, fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui, at vestibulum sit amet, auctor bibendum neque.</p>
                                                                <?php 
                                                                include_once './php/database.php';
                                                                getConnect();
                                                                $query = "select email from admin_info where email = '$userEmail' ";
                                                                if(mysqli_query($databaseConnection, $query)){
                                                                   echo "<a  href='admin/ad_chk.php' class='button primary fit'>Manage</a>";
                                                                }
                                                                ?>
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