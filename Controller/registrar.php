<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        registrar();
    }

    function registrar(){
        require_once("../Model/conexion.php");

        $matricula = $_REQUEST['matricula'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $consulta = "INSERT INTO alumno(matricula, email, contrasena) VALUES ('$matricula', '$email', '$password')";
        $result = $bd->query($consulta);
        if($result){
            header("Location: ../login.html");
        }else{
            echo "No te puedes registrar weon<br>";
            exit;
        }

    }

?>