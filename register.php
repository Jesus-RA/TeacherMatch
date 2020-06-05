<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>teachmatch</title>
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
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="Controller/registrar.php" method="POST">
                <h2 class="text-center"><strong>Create</strong> an account on Teacher Match</h2>
                <div class="form-group"><input class="form-control" type="text" name="nombre" placeholder="Nombre" required></div>
                <div class="form-group"><input class="form-control" type="text" name="segundoNombre" placeholder="Segundo Nombre (Opcional)" required></div>
                <div class="form-group"><input class="form-control" type="text" name="apellidoP" placeholder="Apellido Paterno" required></div>
                <div class="form-group"><input class="form-control" type="text" name="apellidoM" placeholder="Apellido Materno" required></div>
                <div class="form-group"><input class="form-control" type="text" name="matricula" placeholder="Matricula" required></div>
                <div class="form-group">
                    <select name="carrera" id="" class="form-control" style="font-size: 12px;">
                        <?php
                            $bd = mysqli_connect("localhost", "JesusRA", "jamon", "teachermatch");
                            $result = mysqli_query($bd, "SELECT * FROM carrera");
                            while($row = mysqli_fetch_array($result)){
                                $idCarrera = $row['idCarrera'];
                                $carrera = $row['carrera'];
                                echo "<option value='$idCarrera'>$carrera</option>";
                            }
                            mysqli_close($bd);
                        ?>
                    </select>
                    <!-- <input class="form-control" type="text" name="carrera" placeholder="carrera" required> -->
                </div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <!-- <div class="form-group"><input class="form-control" type="password" name="password_repeat" placeholder="Password (repeat)" ></div> -->
                <!-- <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" >I agree to the license terms.</label></div>
                </div> -->
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="login.html">You already have an account? Login here.</a></form>
        </div>
    </div>
    <div class="container" style="text-align: center; font-size: 13px; color: #6c757d!important;">
        <p>Copyright&nbsp;©&nbsp;Teacher Match 2020<br></p>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/buttonCheckbox.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

<!-- <footer>

</footer> -->

</html>