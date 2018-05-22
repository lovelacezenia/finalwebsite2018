<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PHP | Web Systems and Technologies</title>
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
<link rel="icon" href="../images/webtek.png">

<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
body{
  background-image: url("../images/logo.png");
  background-size: 50%;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.slidingDiv {

padding:10px;
margin-top:8px;
border-bottom:5px;
}

.show_hide {
display:none;
}
</style>
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
        <p><img src="../images/page-php.png" height="155px" width="125px" align="left" ></p>
        <p>- is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.</p>
      
       <div class="row">
  <div class="col-xs-6 col-md-10"></div>
          <button type="button" class="button button1" onclick="location.href='http://php.net/manual/en/intro-whatis.php'"><i class="fa chevron-right">See more..</i></button>
        </div>
      </div>

      <button class="accordion">PHP - Predefined Variables</button>
<div class="panel">
  <p> - PHP provides a large number of predefined variables to any script which it runs. PHP provides an additional set of predefined arrays containing variables from the web server the environment, and user input. </p>
  <p>
  <button type="button" class="button button1" onclick="myFunction()">PHP Superglobals</button></p>

<div id="myDIV">

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
</div>

<button class="accordion">PHP - Constants Types</button>
<div class="panel">
  <p>- A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. 
  </p>
  <p> - A constant is case-sensitive. By convention, constant identifiers are always uppercase. A constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. </p>
</p>
<p><img src="../images/phpconstant.jpg"></p>
</div>

<button class="accordion">PHP - GET & POST Methods</button>
<div class="panel">
  <p>
    -There are two ways the browser client can send information to the web server.
  <p><img src="../images/getpost.jpg"></p>
  </p>
  <button class="button button1"><div class="show_hide">The GET Method</div></button>
<div class="slidingDiv">
    <ul>
    <li>The data sent by GET method can be accessed using <mark>QUERY_STRING</mark> environment variable.</li>
    <li>The PHP provides <mark>$_GET </mark>associative array to access all the sent information using GET method.</li>
  </ul>
</div>
  <button class="button button1"><div class="show_hide">The POST Method</div></button>
<div class="slidingDiv">
  <p>
  <ul>
    <li>The POST method can be used to send ASCII as well as binary data.</li>
    <li>The PHP provides <mark>$_POST</mark> associative array to access all the sent information using POST method.</li>
  </ul>
</p>
</div>
</div>

<button class="accordion">PHP - Coding Standard</button>
<div class="panel">
  <p><img src="../images/codstandard.jpg" height="155px" width="155px" align="left" ></p>
  <p>- Coding standard is required because there may be many developers working on different modules so if they will start inventing their own standards then source will become very un-manageable and it will become difficult to maintain that source code in future.</p>
    <p><img src="../images/codingstandard.png"></p>
</div>

<button class="accordion">PHP - Sessions</button>
<div class="panel">
<p><img src="../images/sessionimg.png" height="155px" width="155px" align="left" ></p>

  <p>- A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
  <p>- The location of the temporary file is determined by a setting in the <mark>php.ini</mark> file called <mark> session.save_path </mark>. Before using any session variable make sure you have setup this path.</p>
<p><mark>Example of PHP Session</mark><br>
      <img src="../images/sessionexample.png" height="385px" width="1055px"></p>
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

function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
$(document).ready(function(){

$(".slidingDiv").hide();
$(".show_hide").show();

$('.show_hide').click(function(){
$(".slidingDiv").slideToggle();
});

});
</script>
</body>
 </html>
