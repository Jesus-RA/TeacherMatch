<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About us</title>
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
                                echo "<a class='nav-link' href='calificaTeachers.php'>Teachers</a>";
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php"> <?php if($_SESSION['usuario']== NULL){echo 'Contact';}else{echo  'Profile';} ?> </a></li>
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
    <header class="masthead" style="background-image:url('assets/img/about-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>About Us</h1><span class="subheading">4 students. That's all.</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col"><img class="rounded-circle d-block m-auto" src="assets/img/newlogoBig.png" style="width: 100px;padding-top: 25px;">
                <h2 class="text-center" style="margin-top: 20px;">Ing. Ulises</h2>
                <h4 class="text-center" style="margin-bottom: 25px;margin-top: 25px;">Heading</h4><button class="btn btn-primary btn-block text-center m-auto" type="button" style="width: 132px;">contact</button></div>
            <div class="col"><img class="rounded-circle d-block m-auto" src="assets/img/newlogoBig.png" style="width: 100px;padding-top: 25px;">
                <h2 class="text-center" style="margin-top: 20px;">Ing. Ramirez</h2>
                <h4 class="text-center" style="margin-top: 25px;margin-bottom: 25px;">Heading</h4><button class="btn btn-primary btn-block text-center m-auto" type="button" style="width: 132px;">contact</button></div>
            <div class="col"><img class="rounded-circle d-block m-auto" src="assets/img/newlogoBig.png" style="width: 100px;padding-top: 25px;">
                <h2 class="text-center" style="margin-top: 20px;">Ing. Ubaldo</h2>
                <h4 class="text-center" style="margin-top: 25px;margin-bottom: 25px;">Heading</h4><button class="btn btn-primary btn-block text-center m-auto" type="button" style="width: 132px;">contact</button></div>
            <div class="col"><img class="rounded-circle d-block m-auto" src="assets/img/newlogoBig.png" style="width: 100px;padding-top: 25px;">
                <h2 class="text-center" style="margin-top: 20px;">Ing. Lozada</h2>
                <h4 class="text-center" style="margin-top: 25px;margin-bottom: 25px;">Heading</h4><button class="btn btn-primary btn-block text-center m-auto" type="button" style="width: 132px;">contact</button></div>
        </div>
    </div>
    <hr>
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