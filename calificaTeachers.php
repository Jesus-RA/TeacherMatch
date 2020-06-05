<?php
    session_start();
    if($_SESSION['usuario'] == NULL){
        header("Location: login.html");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Teachers</title>
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
        <div class="overlay" style="height: 100%;"></div>
        <div class="container" style="height: 100%;">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto" style="margin:-50px 0;">
                    <div class="site-heading">
                        <h1 class="text-center" style="padding-top: 0px;padding-bottom: 30px;">Rate your teachers</h1>
                        <h4 class="text-center">At least, you must rate 5 teachers.</h4>
                        <div class="container" style="padding-top: 20px;padding-bottom: 20px;">
                        <div class="row">
                            <div class="col" style="margin-bottom: 10px;"><a class="btn btn-primary btn-block m-auto" role="button" style="margin-bottom: 10px;max-width: 450px;min-width: 250px;" href="califica.html">PROF 1</a></div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-bottom: 10px;"><a class="btn btn-primary btn-block m-auto" role="button" style="margin-bottom: 10px;min-width: 250px;max-width: 450px;" href="califica.html">PROF 2</a></div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-bottom: 10px;"><a class="btn btn-primary btn-block m-auto" role="button" style="margin-bottom: 10px;min-width: 250px;max-width: 450px;" href="califica.html">PROF 3</a></div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-bottom: 10px;"><a class="btn btn-primary btn-block m-auto" role="button" style="margin-bottom: 10px;min-width: 250px;max-width: 450px;" href="califica.html">PROF 4</a></div>
                        </div>
                        <div class="row">
                            <div class="col"><a class="btn btn-primary btn-block m-auto" role="button" href="califica.html" style="min-width: 250px;max-width: 450px;">PROF 5</a></div>
                        </div>
                    </div>
                    <div class="container"><button class="btn btn-success btn-block m-auto" type="button" style="width: 181px;">next</button></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/buttonCheckbox.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>