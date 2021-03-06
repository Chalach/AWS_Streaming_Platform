<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Streaming Plattform</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" type="image/x-icon" href="images/icons8-amazon-web-services.svg" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol">
										<img src="images/icons8-amazon-web-services.svg" alt="Amazon Web Services icon by Icons8" />
									</span>
									<span class="title">Streaming Plattform @ <?php echo $_SERVER['SERVER_ADDR']; ?></span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="impressum.html">Impressum</a></li>
							<li><a href="credits.html">Credits</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Eine von AWS bereitgestellte<br /> Streaming - Plattform.</h1>
								<p>Erleben Sie ein neues atemberaubendes Streaming Erlebnis mit der gesamten Familie.</p>
								<br>
								<?php
									session_start();
									if(isset($_SESSION["username"])) {
										echo "<span>Sie sind mit dem Benutzer <b>". $_SESSION["username"] ."</b> angemeldet.</span><br>";
										echo "<a href='login/logout.php'>Abmelden</a>";
									} else {
										echo "<span>Sie müssen sich anmelden um Videos anschauen zu können!</span><br>";
										echo "<a href='login/login.php'>Anmelden</a>";
									}
								?>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="video1.php">
										<h2>Wellen</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
									
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="video2.php">
										<h2>Quang</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="video3.php">
										<h2>Strand</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="video4.php">
										<h2>Strasse</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="video5.php">
										<h2>Wasserfall</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="video6.php">
										<h2>Wolken</h2>
										<div class="content">
											<img style="width: 80%; height: 80%;" src="images/icons8-amazon-web-services.svg"/>
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; 2020 All rights reserved</li> <li>Hannes Niederwolfsgruber, Alex Lechner</li> <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>