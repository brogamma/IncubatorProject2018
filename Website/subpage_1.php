<!DOCTYPE HTML>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>	
<html>
	<head>
		<title>Transport Incubator 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="/images/avatar.ico" type="image/x-icon"> ==$0
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>
        	<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Incubators</h1>
						</div>
					<!-- Navbar-->
					<nav id ="nav">
						<ul>
							<li><a href="index.html" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a> </li>
							<li><a href="#Incubator2" id="Incubators-link_2" class="skel-layers-ignoreHref"><span class="icon fa-cloud">Incubator 1</span></a></li>
							<li><a href="#Incubator3" id="Incubators-link_3" class="skel-layers-ignoreHref"><span class="icon fa-cloud">Incubator 2</span></a></li>
							<li><a href="#Incubator4" id="Incubators-link_4" class="skel-layers-ignoreHref"><span class="icon fa-cloud">Incubator 3</span></a></li>					
						</ul>
					</nav>
                </div>
            </div>

            <<!--Main--> 
            <div id="main">
					<section id="top" class="one dark cover">
							<div class="container">
	
								<header>
									<h2 class="alt">Hi! we are <strong>ZT5-7</strong>, a <a href="index.html/#about" id="portfolio-link">group of engineers.</a> <br />
									This site is made by ZT5-7, for project Manhattten.</h2>
									<p>This website contains all the information needed to display the info form<br />
									the incubator that was made for this project.</p>
								</header>
	
							</div>
						</section>

						<section id="Head" class="Head">
							<div class="container">
								<header>
									<h1>Incubators</h1>
								</header>
							</div>
						</section>

						<section id="Incubator2" class="two">
							<div class="container">
								<header>
									<h1> Here will go something someday</h1>
									<h3 id= "True",zero></h3>
								</header>
							</div>
						</section>

						<section id="Incubator3" class="three">
							<div class="container">
								<header> 
									<h1> Here will go something someday trademark</h1>
									<h3 id= "True",one></h3>
								</header>
							</div>
						</section>

						<section id="Incubator4" class="two">
								<div class="container">
									<header> 
										<h1> Here will go something someday trademark</h1>
										<h3 id= "True",two></h3>
									</header>
								</div>
						</section>
			</div>

			<div id="footer">

					<!-- Copyright -->
						<ul class="copyright">
							<li>&copy; ZT5-7. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
	
			</div>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script> function If_statement(type){
				var response;
				if()
				{
					document.getElementById("True",id).innerHTML;
				}

				else
				{
					response = "Er is geen couveuse actief op dit tijdstip";
				}
			document.getElementById("Not_true").innerHTML = response;
			}
			</script>
    </body>
</html>
