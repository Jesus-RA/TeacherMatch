<?php
    session_start();
    require_once("Controller/login.php");
    // if($_SESSION['usuario']== NULL){
    //     header("Location: register.html");
    // }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teacher Match</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Teacher Match</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item" role="presentation">
                        <?php
                            if($_SESSION['usuario'] != NULL){
                                echo "<a class='nav-link' href='profesores.php'>Teachers</a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item" role="presentation">
                        <?php
                            if($_SESSION['usuario'] != NULL){
                                echo "<a class='nav-link' href='forum.php'>forum</a>";
                            }
                        ?>                        
                    </li>
                    <li class="nav-item" role="presentation">
                        <?php
                            if($_SESSION['usuario'] == NULL){
                                echo "<a class='nav-link' href='about.php'>About</a>";
                            }
                        ?>                        
                    </li>
                    <li class="nav-item" role="presentation">
                        <?php
                            if($_SESSION['usuario'] != NULL){
                                echo "<a class='nav-link' href='profile.php'>Profile</a>";
                            }
                        ?>                        
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="contact.php"><?php if($_SESSION['usuario']== NULL){echo 'Contact';} ?></a>        
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><?php echo $_SESSION['usuario'] ?? '' ?></a></li>
                    <li class="nav-item" role="presentation">
                        <?php
                            if($_SESSION['usuario'] != NULL){
                                echo "<a class='nav-link' href='Controller/logout.php'>Log Out</a>";
                            }
                        ?>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay" style="height: 584px;"></div>
        <div class="container" style="height: 582px;">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Teacher Match</h1><span class="subheading">Intelligent Matching</span>
                        <div class="btn-group" role="group" style="margin-top: 53px;">
                            <?php
                                if($_SESSION['usuario'] == NULL){
                                    echo "
                                        <a class='btn btn-success' role='button' style='margin-right: 36px;width: 126px;' href='register.php'>REGISTER</a>
                                        <a class='btn btn-primary' role='button' style='width: 126px;' href='login.html'>LOGIN</a>
                                    
                                    ";
                                }
                            ?> 
                            <!-- <a class="btn btn-success" role="button" style="margin-right: 36px;width: 126px;" href="register.html">REGISTER</a>
                            <a class="btn btn-primary" role="button" style="width: 126px;" href="login.html">LOGIN</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row" style="padding-top: 22px;">
            <div class="col-md-10 col-lg-8 offset-xl-2 text-left">
                <div class="post-preview">
                    <h2 class="post-title" style="padding-top: 20px;">Artificial Inteligence now in your classroom.</h2><h3 class="post-subtitle"><span style="font-weight: normal;">With our powerful tools, your grades will go far away from 10. </span></h3></div>
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title"></h2>
                    </a>
                    <p class="post-meta"></p>
                </div>
                <div class="post-preview">
                    <h2 class="post-title" style="padding-top: 20px;"> There is an special teacher for everyone.</h2><h3 class="post-subtitle"><span style="font-weight: normal;">We predict which teacher will be the most suitable for you.</span></h3></div>
                <div class="post-preview">
                    <h2 class="post-title" style="padding-top: 20px;">Failure is not an option</h2><h3><span style="font-weight: normal;">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</span></h3></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Teacher Match 2020</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/buttonCheckbox.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>