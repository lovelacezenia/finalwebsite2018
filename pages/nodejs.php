<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Node JS | Web System and Technologies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/tab.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(../images/Nodejs.png);">
			   		<div class="overlay"></div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-work">
			<div class="container">
				<button class="accordion">Node JS</button>
					<div class="panel">
	  					<p>Node.js is an open source server environment that is free and runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.). It can open, read, write, delete files on the server. <p>
					</div>

				<button class="accordion">Modules in Node JS</button>
					<div class="panel">
	  					<p>Node.js has a set of built-in modules which you can use without any further installation.
						To include a module, use the require() function with the name of the module itself</p>
						<p>Example: var http = require('http');</p>
					</div>

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>					

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>	

				<button class="accordion"></button>
					<div class="panel">
	  					<p>Restrictions on what authenticated users are allowed to do are often not properly enforced. Attackers can exploit these flaws to access unauthorized functionality and/or data, such as access other users' accounts, view sensitive files, modify other users' data, change access rights, etc.</p>
					</div>	

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>	

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>	

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>

				<button class="accordion"></button>
					<div class="panel">
	  					<p></p>
					</div>	
			</div>
		</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Owl Carousel -->
	<script src="../js/owl.carousel.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="../js/main.js"></script>
	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
							panel.style.display = "none";
					} else {
							panel.style.display = "block";
					}
			});
	}
	</script>
	</body>
</html>
