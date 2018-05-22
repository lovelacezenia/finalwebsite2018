<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Node JS | Web Systems and Technologies</title>
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
				<div class="container">
				<p style="text-align:center;"><img src="../images/notes.png" height="85px" width="85px" ></p>
			<div class="container">
				<button class="accordion">Node JS</button>
					<div class="panel">
	  					<p>Node.js is an open source server environment that is free and runs on various platforms like:
	  					<center><p><img src="../images/os.png" height="500px" width="550px"></p> 
	  					<p>
					</div>

				<button class="accordion">Modules in Node JS</button>
					<div class="panel">
	  					<p>Node.js has a set of built-in modules which you can use without any further installation.
						To include a module, use the require() function with the name of the module itself.</p>
						<center><p><img src="../images/mod.png" height="500px" width="550px"></p> 
					</div>

				<button class="accordion">URL Module in Node JS</button>
					<div class="panel">
	  					<p>The URL module splits up a web address into readable parts. To include the URL module, use the require() method:</p>
	  					
	  					<p>Example: var url = require('url');</p>
					</div>					

				<button class="accordion">REPL in Node JS</button>
					<div class="panel">
	  					<p>REPL stands for Read Eval Print Loop and it represents a computer environment like a Windows console or Unix/Linux shell where a command is entered and the system responds
						with an output in an interactive mode. Node.js or Node comes bundled with a REPL
						environment. It performs the following tasks: </p>
							<p>● Read - Reads user's input, parses the input into JavaScript data-structure, and stores in memory. </p>
							<p>● Eval - Takes and evaluates the data structure.</p>
							<p>● Print - Prints the result.</p>
							<p>● Loop - Loops the above command until the user presses ctrl-c twice.</p>
					</div>	

				<button class="accordion">Callback Concept</button>
					<div class="panel">
	  					<p>Callback is an asynchronous equivalent for a function. A callback function is called at the
						completion of a given task. Node makes heavy use of callbacks. All the APIs of Node are
						written in such a way that they support callbacks.</p>
					</div>	

				<button class="accordion">Event Loop</button>
					<div class="panel">
	  					<p>Node.js uses events heavily and it is also one of the reasons why Node.js is pretty fast
						compared to other similar technologies. As soon as Node starts its server, it simply initiates
						its variables, declares functions, and then simply waits for the event to occur.</p>
						<center><p><img src="../images/loop.png" height="500px" width="800px"></p></center>
						
					
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
