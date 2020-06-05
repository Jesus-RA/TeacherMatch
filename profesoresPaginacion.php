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
    <link rel="stylesheet" href="css/profesores.css">
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
                        <h1>Profesores</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Imprime tarjetas de profesores -->
    <?php
        include("getProfesores.php");
        $arrayProfesores = getProfesores();
        $profesores_x_pagina = 10;
        $tam = sizeof($arrayProfesores);
        $paginas = $tam/$profesores_x_pagina;
        $paginas = ceil($paginas);
        $pagina = $_GET['pagina']-1;
        $teachers = getTeachers($pagina, $profesores_x_pagina);
        if(!$_GET){
            header("Location: profesoresPaginacion.php?pagina=1");
        }
        if($_GET['pagina']<1 || $_GET['pagina']>$paginas){
            header("Location: profesoresPaginacion.php?pagina=1");
        }
    ?>
    <div class="container">
        <div class="row">
            <?php foreach($teachers as $profesor): $fotografia = "assets/img/".$profesor["foto"];?>
            <div id="tarjetaProfesor" class="col-md-10 col-lg-5" >
                    <div id="fotoPerfil" class="col-lg-4">
                        <img id="perfil" src="<?php echo $fotografia;?>" alt="">
                    </div>

                    <div id="nombreProfesor" class="col-lg-12">
                        <h5>
                            <?php
                                echo $profesor["nombre"]." ";
                                echo $profesor["segundoNombre"]." ";
                                echo $profesor["apellidoP"]." ";
                                echo $profesor["apellidoM"]." ";
                            ?>
                        </h5>
                    </div>

                    <div id="infoProfesor" class="col-lg-8">
                        <label for="claridad">Claridad:</label>
                        <meter id="claridad" min="0" low="5" high="8" max="10" value="<?php echo $profesor["claridad"] ?>" optimum="10">3</meter><br>
                        <label for="ayuda">Ayuda:</label>
                        <meter id="ayuda" min="0" low="5" high="8" max="10" value="<?php echo $profesor["ayuda"] ?>" optimum="10">3</meter><br>
                        <label for="facilidad">Facilidad:</label>
                        <meter id="facilidad" min="0" low="5" high="8" max="10" value="<?php echo $profesor["facilidad"] ?>" optimum="10">3</meter><br>
                    </div>

                    <div id="perfilProfesor" class="col-lg-3">
                        <a href="#">Ver Perfil</a>
                    </div>

                    <div id="materiasProfesor" class="col-lg-3">
                        <a href="#">Materias</a>                  
                    </div>

            </div>
            <?php endforeach ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="profesoresPaginacion.php?pagina=<?php echo $_GET['pagina']-1; ?>">
                        Previous
                    </a>
                </li>
                <?php for($p=0; $p<$paginas; $p++):?>    
                <li class="page-item  <?php echo $_GET['pagina'] == $p+1 ? 'active' : '' ?> ">
                        <a class="page-link" href="profesoresPaginacion.php?pagina=<?php echo $p+1; ?>">
                            <?php echo $p+1; ?>
                        </a>
                </li>
                <?php endfor ?>
                <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                        <a class="page-link" href="profesoresPaginacion.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                            Next
                        </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--  -->

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