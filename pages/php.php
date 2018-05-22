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
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
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
.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:right;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;
    width: 10px; height: 10px;
    border: 1px solid #999;
    top: -10px; right: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;right: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}

@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}

#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 40px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
a {
  color: #0254EB
}
a:visited {
  color: #0254EB
}
a.morelink {
  text-decoration:none;
  outline: none;
}
.morecontent span {
  display: none;
}
.comment {
  width: 400px;
  background-color: #f0f0f0;
  margin: 10px;
}

a {color:red; text-decoration:inherit;}
article {width:50%; padding:2em; margin: 0 auto 0 auto;font-family:Helvetica;}
.more-content {display:none;}
.cg-visible {display:block;}

</style>
</head>
<body>
  <aside id="colorlib-hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(../images/php1.jpg);">
          <div class="overlay"></div>
        </li>
        <li style="background-image: url(../images/cc.png);">
          <div class="overlay"></div>
        </li>
        <li style="background-image: url(../images/php.jpg);">
          <div class="overlay"></div>
        </li>

        </ul>
      </div>
  </aside>

    <div id="colorlib-about">
      <div class="container">
        <div class="row">

          <!-- <div class="col-md-5 animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-pb-sm">
                        <div class="row">
                            <div class="col-md-15">
                                <iframe width="470" height="350" src="https://www.youtube.com/embed/kY5P9sZqFas"></iframe>
                            </div>
                            <div class="col-md-15">
                                <iframe width="470" height="350" src=" https://www.youtube.com/embed/ArsbbtkF0ps"></iframe>
                            </div>
                            <div class="col-md-15">
                                <iframe width="470" height="350" src="https://www.youtube.com/embed/EuW4EhdPv0o"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div> -->
          <div class="container">
            <figure class="swing">
                        <img src="../images/php3.jpg" height="300px" width="300px" align="right">
                      </figure>
              <div class="col-md-8 text-center animate-box intro-heading">
            <h2>Introduction</h2>
            <p>PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.</p>
          </div></div>
         
              <ul>
                <li>PHP is a recursive acronym for <mark>"PHP: Hypertext Preprocessor"</mark>.</li>

                <li>PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</li>

                <li>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</li>
                <div class="more-content">

                <li>PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.</li>

                <li>PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.</ li>

                <li>PHP is forgiving: PHP language tries to be as forgiving as possible.</ li>

                <li>PHP Syntax is C-Like.</li>
                 </p>
    </div>
    <p><a class="readmore" href="#">Show more (+)</a>
              </ul></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
              <div class="row">
                <div class="col-md-4 col-pb-sm">
                  <div class="row">
                    <div class="col-md-11">
                      <h2 align="center">Common uses of PHP</h2>
                      <ul>
                          <li>PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.</li>
                          <li>PHP can handle forms, i.e. gather data from files, save data to a file, through email you can send data, return data to the user.</li>
                           <div class="more-content">
                          <li>You add, delete, modify elements within your database through PHP.</li>
                          <li>Access cookies variables and set cookies.</li>
                          <li>Using PHP, you can restrict users to access some pages of your website.</li>
                          <li>It can encrypt data.</li>
                            </p>
    </div>
    <p><a class="readmore" href="#">Show more (+)</a>
                        </div>
                      </ul>
                    </div>
                  </div>
                <div class="col-md-4 col-pb-sm">
                  <h2 align="center">Characteristics of PHP</h2>
                  <p>Five important characteristics:</p>
                  <ul>
                    <li>Simplicity</li>
                    <li>Efficiency</li>
                    <li>Security</li>
                    <li>Flexibility</li>
                    <li>Familiarity</li></p>
                  </ul>
                </div>
                <div class="col-md-4 col-pb-sm right-display">
                  <h2 align="center">PHP - Syntax Overview</h2>
                  <p >This chapter will give you an idea of very basic syntax of PHP and very important to make your PHP foundation strong.</p>
                </div>
              </div>
            </div>



<div class="container">
  <figure class="swing">
              <a href="#"><img src="../images/php3.jpg" height="300px" width="300px" align="right"></a>
            </figure>
                               <h2>PHP - Variable Types</h2>
                               <p>The main way to store information in the middle of a PHP program is by using a variable.</p>
                                <ul>
                                  <li>All variables in PHP are denoted with a leading dollar sign ($).</li>
                                   <li>The value of a variable is the value of its most recent assignment.</li>
                                    <div class="more-content">
                                   <li>Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.</li>
                                   <li>Variables can, but do not need, to be declared before assignment.</li>
                                   <li>Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string of characters.</li>
                                   <li>Variables used before they are assigned have default values.</li>
                                   <li>PHP does a good job of automatically converting types from one to another when necessary.</li>
                                   <li>PHP variables are Perl-like.</li>
                                   </p>
    </div>
    <p><a class="readmore" href="#">Show more (+)</a>
                                 </diV>
                                </ul>
                    </div>
                </div>
            </div>
      </div>  </div>

      <div class="container" >
          <div class="animate-box intro-heading">
            <img src="../images/page-php.png" height="300px" width="300px" align="left">
            <p>
            <h1>PHP - Web Concepts</h1>
            <p>This session demonstrates how PHP can provide dynamic content according to browser type, randomly generated numbers or User Input. It also demonstrated how the client browser can be redirected.</p>
            <p>
            <strong>Identifying Browser & Platform</strong><br>
            <ul>
            <li>PHP creates some useful environment variables that can be seen in the phpinfo.php page that was used to setup the PHP environment.</ul>
            <li>One of the environment variables set by PHP is HTTP_USER_AGENT which identifies the user's browser and operating system.</ul>
            </ul>
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container" >
          <div class="animate-box intro-heading">
            <p align="center">
              <h1>PHP - Predefined Variables</h1>
              PHP provides a large number of predefined variables to any script which it runs.
              PHP provides an additional set of predefined arrays containing variables from the web server the environment,
              and user input. These new arrays are called <strong><mark>superglobals</mark></strong>.
            </p>
            <div class="more-content">
            <p><table id="list">
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
    <p><a class="readmore" href="#">Show more (+)</a>
          </p>
          </div>
        </div>
      </div>

<!-- video and tutorials-->
<div class="container">
  <div class="row">
    <div class="col-md-5 animate-box">


      <div class="container">
          <div class="row">
              <div class="col-md-7 col-pb-sm">
                  <div class="row">
                    <div class="col-md-8 text-center animate-box intro-heading">
                    <h2>Video Tutorials for PHP</h2>
                      <div class="col-md-15">
                          <iframe width="470" height="250" src="https://www.youtube.com/embed/kY5P9sZqFas"></iframe>
                      </div>
                      <div class="col-md-15">
                          <iframe width="470" height="250" src=" https://www.youtube.com/embed/ArsbbtkF0ps"></iframe>
                      </div>
                      <div class="col-md-15">
                          <iframe width="470" height="250" src="https://www.youtube.com/embed/EuW4EhdPv0o"></iframe>
                      </div></div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="container">   
    <div class="col-md-7 ">
      <div class="row">
        <div class="col-md-15 text-center animate-box intro-heading">
      <h2>Tutorial Property</h2>
      <p>Coding Standard</p>
      <br>
      <a href="https://www.tutorialspoint.com/php/php_coding_standard.htm">
      <img src="../images/php4.png" height="500px" width="600px">
      </div>  
    </div>
    </div>
  </div>
</div>
<!--end of tutorials-->

<!--fun fact-->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">

            <h2>Fun Fact</h2>
            <p style="text-align:center;"><img src="../images/dan.gif" height="115px" width="105px" ></p>
            <p>Some of the biggest online brands, such as Facebook, ProProfs, Digg, Friendster, Flickr, Technorati, and Yahoo! are powered by PHP.</p>
          </div>
        </div>
      </div>
<!---->
  </div>


  <!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

</div>
</div>
 <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-pb-sm">
                            <div class="row">
                                <div class="col-md-15" align="center">
                                    <h2>Web Systems and Technologies</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-pb-sm" align="center">
                            <h2>Follow Us</h2>
                            <p class="colorlib-social-icons colorlib-social-icons2" >
                              <a href="https://www.facebook.com/diannealyza.cayabyab?ref=br_rs"><i class="icon-facebook4"></i></a>
                              <a href="https://twitter.com/ssaarraahhmae?lang=en"><i class="icon-twitter3"></i></a>
                            </p>

                            <p align="center">9325A | 1:00 - 2:00 TF</p>
                        </div>
                        <div class="col-md-4 col-pb-sm" align="center">
                            <span class="block">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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

// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

$(document).ready(function() {
  var showChar = 100;
  var ellipsestext = "...";
  var moretext = "more";
  var lesstext = "less";
  $('.more').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

      var c = content.substr(0, showChar);
      var h = content.substr(showChar-1, content.length - showChar);

      var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

      $(this).html(html);
    }

  });

  $(".morelink").click(function(){
    if($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
  });
});
$(".readmore").on('click touchstart', function(event) {
        var txt = $(".more-content").is(':visible') ? 'Show more (+)' : 'Less (–)';
        $(this).parent().prev(".more-content").toggleClass("cg-visible");
        $(this).html(txt);
        event.preventDefault();
    });
</script>
  </body>
</html>
