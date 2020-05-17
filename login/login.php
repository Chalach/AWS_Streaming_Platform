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
		<link rel="shortcut icon" type="image/x-icon" href="../images/icons8-amazon-web-services.svg" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="../index.php" class="logo">
									<span class="symbol">
										<img src="../images/icons8-amazon-web-services.svg" alt="Amazon Web Services icon by Icons8" />
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
							<li><a href="../index.php">Home</a></li>
							<li><a href="../impressum.html">Impressum</a></li>
							<li><a href="../credits.html">Credits</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Anmelden</h1>
								<p>Bitte geben Sie ihren Benutzernamen und Passwort ein um sich anzumelden</p>
							</header>
							<section>
								<?php
									require('db.php');
									session_start();
									// If form submitted, insert values into the database.
									if (isset($_POST['username'])){
										
										$username = stripslashes($_REQUEST['username']); // removes backslashes
										$username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
										$password = stripslashes($_REQUEST['password']);
										$password = mysqli_real_escape_string($conn,$password);
										
									//Checking is user existing in the database or not
										$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
										$result = mysqli_query($conn,$query) or die(mysql_error());
										$rows = mysqli_num_rows($result);
										if($rows==1){
											$_SESSION['username'] = $username;
											header("Location: ../index.php"); // Redirect user to index.php
											}else{
												echo "<script type='text/javascript'>alert('Anmeldung fehlgeschlagen! Versuchen Sie erneut!'); window.open('login.php','_self');</script>";
											}
									}else{
								?>
									<form action="" method="POST">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="username" placeholder="Benutzername" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="password" name="password" placeholder="Password">
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Login" name="submit" class="primary" /></li>
													<li><input type="reset" value="Zurücksetzen" /></li>
												</ul>
											</div>
										</div>
									</form>
								<?php } ?>
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
	

	