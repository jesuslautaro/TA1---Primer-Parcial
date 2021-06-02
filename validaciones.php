<?php 

 function validacionDeCampos($datos){
        if($datos['Nombre'] === "" || $datos['Apellido'] === "" || $datos['Telefono'] === "" || $datos['FechaDeNac'] === "" || $datos['Edad'] === "" || $datos['Email'] === ""){
            error_log("No completó los campos. Complete todos los campos");
            return false;
        }
        return true;
    }

  