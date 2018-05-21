
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WebTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

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
    <link rel="icon" href="../images/webtek.png">

</head>

<body>
    <nav id="colorlib-main-nav" role="navigation">
        <a class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="colorlib-table-cell js-fullheight">
                <ul>
                    <li><a href="../home.php">Home</a></li>
                    <li><a href="notes.php">Notes</a></li>
                    <li><a href="quiz.php">Quiz</a></li>
                    <li><a href="video.php">Video Tutorials</a></li>
                    <li><a href="developers.php">Developers</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="colorlib-page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url(../images/slide5.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>IT 324</h2>
                                    <h1>Web Systems And Technologies</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(../images/slide6.png);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>Sharing your knowledge with others,</h2>
                                    <h1>Does not make you less important.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(../images/slide4.png);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    <h2>Sites need to be able to interact in one single, universal space.</h2>
                                    <h1> - Tim Berners-Lee </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="../css/style2.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>YOUR SCORE IS:</h1>

        <?php
            $answer1 = $_POST['question-1-answers'];
            if (!isset($answer1))  {$answer1 = 'no answer';}
            $answer2 = $_POST['question-2-answers'];
            if (!isset($answer2))  {$answer2 = 'no answer';}
            $answer3 = $_POST['question-3-answers'];
            if (!isset($answer3))  {$answer3 = 'no answer';}
            $answer4 = $_POST['question-4-answers'];
            if (!isset($answer4))  {$answer4 = 'no answer';}
            $answer5 = $_POST['question-5-answers'];
            if (!isset($answer5))  {$answer5 = 'no answer';}
            $answer6 = $_POST['question-6-answers'];
            if (!isset($answer6))  {$answer6 = 'no answer';}
            $answer7 = $_POST['question-7-answers'];
            if (!isset($answer7))  {$answer7 = 'no answer';}
            $answer8 = $_POST['question-8-answers'];
            if (!isset($answer8))  {$answer8 = 'no answer';}
            $answer9 = $_POST['question-9-answers'];
            if (!isset($answer9))  {$answer9 = 'no answer';}
            $answer10 = $_POST['question-10-answers'];
            if (!isset($answer10))  {$answer10 = 'no answer';}
           
        
             $totalCorrect = 0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "B") { $totalCorrect++; }
            if ($answer9 == "C") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
           


            echo "<div id='results'>$totalCorrect / 10 </div>";
            
        ?>
          <div id="buttons" align="center">
            <input type="button" name="b2" value="TAKE MORE QUIZ" onclick="location.href='nextquiz.php'">
        </div>
         <div id="buttons" align="center">
            <input type="button" name="b2" value="END" onclick="location.href='notes.php'">
        </div>
        
	</div>

	  <script src="../js/lib/jquery/jquery.min.js"></script>
 <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->

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

</body>

</html>
