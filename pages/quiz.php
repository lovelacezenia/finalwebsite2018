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
    <meta http-equiv="Refresh" content="45;">

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

    <title>Quiz</title>

    <link rel="stylesheet" type="text/css" href="../css/style2.css" />
</head>

<body>

        <h1>QUIZ</h1>


    <div id="page-wrap">

        <form action="score.php" method="post" id="quiz">

            <ol>

                <li>

                    <h3>It is a java Objects that are intended to play the role of server component...</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) HTTP SERVLET </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) JAVA SERVLET</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) SERVLET REQUEST</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) SERVLET RESPONSE </label>
                    </div>

                </li>

                <li>

                    <h3>It is a widely-used open source general-purpose scripting language that is especially suited for web development...</h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) PHP </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) JSP </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) SERVLET </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) JAVASCRIPT </label>
                    </div>

                </li>

                <li>

                    <h3>It is a PHP superglobal variable which holds information about headers, path, and script location... </h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) $_REQUEST </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) $_POST </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) $_SERVER </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) $_FILES </label>
                    </div>

                </li>

                <li>

                    <h3>It is a JavaScript runtime built on Chrome's V8 JavaScript engine...</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Angular </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Apache </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Laravel </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Node.js </label>
                    </div>

                </li>

                <li>

                    <h3>It is a server-side programming technology that enables the creation of dynamic, platform-independent method for building Web-based Applications...</h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) PHP </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) JSP </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) SERVLET </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) JAVASCRIPT </label>
                    </div>

                </li>

            </ol>


        <div id="buttons" align="center">
             <input type="button" name="b1" value="prev" onclick="location.href='quiz.php'">
            <input type="button" name="b2" value="next" onclick="location.href='nextquiz.php'">
        </div>
        <div id="submit" align="center">
          <input type="submit" value="Submit Quiz"/>
        </div>
    </div>
    </form>



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
