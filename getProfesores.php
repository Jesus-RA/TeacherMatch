<?php

    function getProfesores(){

        require_once("Model/conexion.php");
        $profesores = "SELECT p.nombre, p.segundoNombre, p.apellidoP, p.apellidoM, m.foto, r.claridad, r.ayuda, r.facilidad FROM persona p, profesor m , resenaProfesor r WHERE p.idPersona = m.persona && r.idResenaProfesor = m.idProfesor;";
        // $arrayProfesores = [
        //     "nombre" => "",
        //     "segundoNombre" => "",
        //     "apellidoP" => "",
        //     "apellidoM" => "",
        //     "foto" => "",
        //     "claridad" => "",
        //     "ayuda" => "",
        //     "facilidad" => ""
        // ];
        $i=0;
        $result = $bd->query($profesores);
        while($row = mysqli_fetch_array($result)){
            $nombre = $row['nombre'];
            $segundoNombre = $row['segundoNombre'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $foto = $row['foto'];
            $claridad = $row['claridad'];
            $ayuda = $row['ayuda'];
            $facilidad = $row['facilidad'];

            $arrayProfesores[$i]["nombre"] = "$nombre";
            $arrayProfesores[$i]["segundoNombre"] = "$segundoNombre";
            $arrayProfesores[$i]["apellidoP"] = "$apellidoP";
            $arrayProfesores[$i]["apellidoM"] = "$apellidoM";
            $arrayProfesores[$i]["foto"] = "$foto";
            $arrayProfesores[$i]["claridad"] = "$claridad";
            $arrayProfesores[$i]["ayuda"] = "$ayuda";
            $arrayProfesores[$i]["facilidad"] = "$facilidad";
            $i++;
        }
        $bd->close();
        return $arrayProfesores;

    }

    function getTeachers($pagina, $profesores_x_pagina){
        include("Model/conexion.php");
        $from = ($pagina) * $profesores_x_pagina;
        $queryProfesores = "SELECT p.nombre, p.segundoNombre, p.apellidoP, p.apellidoM, m.foto, r.claridad, r.ayuda, r.facilidad FROM persona p, profesor m , resenaProfesor r WHERE p.idPersona = m.persona && r.idResenaProfesor = m.idProfesor LIMIT $from, $profesores_x_pagina;";
        $result = $bd->query($queryProfesores);
        $i=0;
        while( $row = mysqli_fetch_array($result)){
            $nombre = $row['nombre'];
            $segundoNombre = $row['segundoNombre'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $foto = $row['foto'];
            $claridad = $row['claridad'];
            $ayuda = $row['ayuda'];
            $facilidad = $row['facilidad'];
            
            $teachers[$i]["nombre"] = "$nombre";
            $teachers[$i]["segundoNombre"] = "$segundoNombre";
            $teachers[$i]["apellidoP"] = "$apellidoP";
            $teachers[$i]["apellidoM"] = "$apellidoM";
            $teachers[$i]["foto"] = "$foto";
            $teachers[$i]["claridad"] = "$claridad";
            $teachers[$i]["ayuda"] = "$ayuda";
            $teachers[$i]["facilidad"] = "$facilidad";
            $i++;
        }
        return $teachers;
    }

?>