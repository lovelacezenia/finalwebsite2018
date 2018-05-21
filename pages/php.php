<!DOCTYPE HTML>
<html>
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
<link rel="stylesheet" href="../css/table.css">
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
		   	<li style="background-image: url(../images/php1.jpg);">
		   		<div class="overlay"></div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


		<div class="container">
				<p style="text-align:center;"><img src="../images/notes.png" height="85px" width="85px" ></p>
      <button class="accordion">PHP Hypertext Preprocessor (PHP) </button>
      <div class="panel">
        <p>- is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.</p>
      </div>

			<button class="accordion">PHP - Predefined Variables</button>
<div class="panel">
  <p> - PHP provides a large number of predefined variables to any script which it runs. PHP provides an additional set of predefined arrays containing variables from the web server the environment, and user input. </p>
  <p>PHP Superglobals</p>
  <p>
    <table id="list">
  <tr>
    <th>No.</th>
    <th>Variable & Description</th>

  </tr>
  <tr>
    <td>1</td>
    <td>$GLOBALS <br>

- is used to access global variables from anywhere in the PHP script (also from within functions or methods)</td>

  </tr>
  <tr>
    <td>2</td>
    <td>$_SERVER <br>

- is a PHP super global variable which holds information about headers, paths, and script locations.</td>

  </tr>
  <tr>
    <td>3</td>
    <td>$_GET <br>

- can also be used to collect form data after submitting an HTML form with method="get". </td>

  </tr>
  <tr>
    <td>4</td>
    <td>$_POST <br>

- is widely used to collect form data after submitting an HTML form with method="post". </td>

  </tr>
  <tr>
    <td>5</td>
    <td>$_FILES <br>

- an associative array of items uploaded to the current script via the HTTP POST method.</td>

  </tr>
  <tr>
    <td>6</td>
    <td>$_REQUEST <br>

- an associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.<br>
- is used to collect data after submitting an HTML form.
</td>

  </tr>
  <tr>
    <td>7</td>
    <td>$_COOKIE <br>

An associative array of variables passed to the current script via HTTP cookies.</td>

  </tr>
  <tr>
    <td>8</td>
    <td>$_SESSION <br>

An associative array containing session variables available to the current script.</td>

  </tr>
  <tr>
    <td>9</td>
    <td>$_PHP_SELF <br>

A string containing PHP script file name in which it is called.</td>

  </tr>
  <tr>
    <td>10</td>
    <td>$php_errormsg <br>

$php_errormsg is a variable containing the text of the last error message generated by PHP.</td>

  </tr>

</table>
	</p>
</div>

<button class="accordion">PHP - Constants Types</button>
<div class="panel">
  <p>- A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. By default, a constant is case-sensitive. By convention, constant identifiers are always uppercase. A constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. If you have defined a constant, it can never be changed or undefined.
	</p>
	<p><mark>constant() function </mark><br>
		- As indicated by the name, this function will return the value of the constant.

This is useful when you want to retrieve value of a constant, but you do not know its name, i.e. It is stored in a variable or returned by a function.
	</p>
</p>
</div>

<button class="accordion">PHP - GET & POST Methods</button>
<div class="panel">
  <p>
    -There are two ways the browser client can send information to the web server.
  <ul>
    <li>The GET Method</li>
    <li>The POST Method</li>
  </ul>
  Before the browser sends the information, it encodes it using a scheme called URL encoding. In this scheme, name/value pairs are joined with equal signs and different pairs are separated by the ampersand.
	</p>
	<p>The GET Method <br>
		<ul>
		<li>The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character. </li>
		<li>The GET method produces a long string that appears in your server logs, in the browser's Location: box.</li>
		<li>The GET method is restricted to send upto 1024 characters only.</li>
		<li>Never use GET method if you have password or other sensitive information to be sent to the server.</li>
		<li>GET can't be used to send binary data, like images or word documents, to the server.</li>
		<li>The data sent by GET method can be accessed using QUERY_STRING environment variable.</li>
		<li>The PHP provides $_GET associative array to access all the sent information using GET method.</li>
	</ul>
	</p>

	<p>The POST Method</p>
	<p>- The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.</li>
	</p>
	<p>
	<ul>
		<li>The POST method does not have any restriction on data size to be sent.</li>
		<li>The POST method can be used to send ASCII as well as binary data.</li>
		<li>The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.</li>
		<li>The PHP provides $_POST associative array to access all the sent information using POST method.</li>
	</ul>
</p>
</div>

<button class="accordion">PHP - Coding Standard</button>
<div class="panel">
  <p>- Every company follows a different coding standard based on their best practices. Coding standard is required because there may be many developers working on different modules so if they will start inventing their own standards then source will become very un-manageable and it will become difficult to maintain that source code in future.</p>
	<p>Here are several reasons why to use coding specifications −</p>
	<ul>
		<li>Your peer programmers have to understand the code you produce. A coding standard acts as the blueprint for all the team to decipher the code.</li>

		<li>Simplicity and clarity achieved by consistent coding saves you from common mistakes.</li>

		<li>If you revise your code after some time then it becomes easy to understand that code.</li>

		<li>Its industry standard to follow a particular standard to being more quality in software.</li>
</div>

<button class="accordion">PHP - Sessions</button>
<div class="panel">
  <p>- An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
	<p>- A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
	<p>- The location of the temporary file is determined by a setting in the <mark>php.ini</mark> file called <mark> session.save_path </mark>. Before using any session variable make sure you have setup this path.</p>
<p>When a session is started following things happen −</P>
	<ul>
		<li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</li>
		<li> A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string.</li>
		<li> A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>
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
