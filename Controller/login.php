<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        login();
    }
        
    function login(){

        require_once("../Model/conexion.php");
        
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $result = $bd->query("SELECT email FROM alumno where email = '$email'; ");
        if(mysqli_num_rows($result) === 1){
            $result = $bd->query("SELECT contrasena FROM alumno WHERE email = '$email' AND contrasena = '$password'; ");
            if(mysqli_num_rows($result)){
                session_start();
                $_SESSION['usuario'] = $email;
                header("Location: ../index.php");
            }else{
                header("Location: ../loginPassWrong.html");
            }

        }else{
            header("Location: ../loginEmailWrong.html");
        }

    }

?>
