<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Servlet | Web System and Technologies</title>
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
			   	<li style="background-image: url(../images/JAVEE.png);">
			   		<div class="overlay"></div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-work">
			<div class="container">
				<button class="accordion">Java Web Servlets</button>
					<div class="panel">
					  <p>
							<ul>
								<li> Java Object based on the Servlet API </li>
								<li> Runs in a server application to answer client requests; technically, servlets are not tied to a specific client-server protocol, but they are most commonly used with HTTP and the term „servlet‟ is often used in the context of an “HTTP Servlet” </li>
								<li> Web-tier components in the Java EE architecture. </li>
								<li> Runs in, and is managed by, a web-tier container called the „Servlet Container‟ </li>
								<li> Mapped to URLs to which clients send requests </li>
							</ul>
						</p>
					</div>

				<button class="accordion">Servlet Processing</button>
					<div class="panel">
					  <p>
							<ul>
								<li> Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container  </li>
								<li> Servlet container checks if servlet is already loaded </li>
								<li> If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method.  </li>
								<li> Servlet container invokes the servlet‟s service method, passing request and response objects as arguments </li>
								<li> Servlet processes the request using the response object to create the response, which is returned by the servlet container to the web server, which in turn sends the response to the client </li>
								<li> Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before a servlet is unloaded, the servlet container invokes its destroy method. </li>
							</ul>
						</p>
					</div>

				<button class="accordion">Java Servlets Method</button>
					<div class="panel">
					  	<p>
					  		<ul>
					  			<li> init(config) - Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time startup initialization </li>
					  			<li> service(request, response) - Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call) </li>
					  			<li> Destroy() - Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation) </li>
					  		</ul>
						</p>
					</div>

				<button class="accordion">Java Server Pages</button>
					<div class="panel">
					  	<p>
					  		<ul>
					  			<li> Simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content. </li>
					  			<li> Java Server Pages Actions (JSP tags) perform a variety of functions and extend the capabilities of JSP. </li>
					  			<li> Java Server Pages Actions use XML-like syntax, and are used to manage JavaBeans component. </li>
					  			<li> Directives are instructions that are processed by the JSP engine when the page is compiled to a servlet. </li>
					  		</ul>
						</p>
					</div>

				<button class="accordion">JSP Features</button>
					<div class="panel">
					  	<p>
					  		<ul>
					  			<li> Text-based document capable of generating both static and dynamic content (typically intermixed) </li>
					  			<li> Mark-up based document syntax (JSP-style or XML-style), combining (X) HTML elements as well as standard and custom JSP elements; thus, web page authors can feel right “at home” with the mark-up syntax. </li>
					  			<li> Embedded Java Coding support via “scriptlets” </li>
					  			<li> Template text are converted into JSPWriter </li>
					  		</ul>
						</p>
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
