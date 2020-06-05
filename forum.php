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
    <title>Forum</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="css/foro.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.html">Teacher Match</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
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
        </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto" style="height: 582px;">
                    <div class="site-heading" style="height: 74px;" id="foro">
                        <form action="">
                            <!-- <label for="nombre">Nombre: </label> -->
                            <input type="text" placeholder="Nombre" id="nombre" name="nombre"><br>
                            <!-- <label for="publicacion">Comentario: </label> -->
                            <textarea name="publicacion" id="publicacion"  placeholder="Escribe un post"></textarea>
                        </form>
                        <!-- <a href="settings.html"><img class="rounded-circle img-fluid shadow" src="assets/img/newlogoBig.png" style="width: 153px;"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 d-block m-auto" style="margin-top: 57px;padding-top: 55px;"></div>
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