<!DOCTYPE HTML>
-<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>WebTech</title>
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
		   	<li style="background-image: url(../images/SO.png);">
		   		<div class="overlay"></div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="colorlib-work">
		<div class="container">
			<button class="accordion">Context Scope</button>
<div class="panel">
  <p>
		<ul>
				<li> <p>Context scope or application scope starts from the point where a web application is put into service (started) till it is removed from service (shutdown) or the web application is reloaded. Parameters/attributes within the application scope will be available to all requests and sessions.</p></li>
			
			<li><p>Application object is available in a JSP page as an implicit object called application. </p></li>
			
		</ul>
	</p>
</div>

<button class="accordion">Request Scope</button>
<div class="panel">
  
		<ul>
					<li><p>Request scope start from the moment an HTTP request hits a servlet in our web container and end when the servlet is done with delivering the HTTP response.</p></li>
					<li><p>With respect to the servlet life cycle, the request scope begins on entry to a servlet’s service() method and ends on the exit from that method. </p></li>
				</ul>
	
</div>

<button class="accordion">Session Scope</button>
<div class="panel">
		<ul>
		<li><p>A session scope starts when a client (e.g. browser window) establishes connection with our web application till the point where the browser window is closed.</p></li>
		<li><p>Session scope spans across multiple requests from the same client. </p></li>
</ul>
</div>

<button class="accordion">JSP page Scope</button>
<div class="panel">
  <ul>
		<li><p>The page scope restricts the scpoe and lifetime of attributes to the same page where it was created.</p></li>
		<li><p>It is available in a JSP page as an implicit object called pageScope.</p></li>
</ul>
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
