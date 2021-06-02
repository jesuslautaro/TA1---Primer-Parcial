<?php 

 function agregado(){
    echo "Se agrega persona" ;

}

function validacionDeCampos($datos){
        if($datos['Nombre'] === "" || $datos['Apellido'] === "" || $datos['Telefono'] === "" || $datos['FechaDeNac'] === "" || $datos['Edad'] === "" || $datos['Email'] === ""){
            error_log("No completó los campos. Complete todos los campos");
            return false;
        }
        return agregado();
    }

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("HTTP/1.1 500 Forbidden");
        die("Forbidden");
    }
  
    