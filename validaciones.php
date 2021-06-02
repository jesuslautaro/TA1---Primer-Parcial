<?php 

 function agregado(){
    echo "Persona Agregada correctamente" ;

}

function validacionDeCampos($datos){
        if($datos['Nombre'] === "" || $datos['Apellido'] === "" || $datos['Telefono'] === "" || $datos['FechaDeNac'] === "" || $datos['Edad'] === "" || $datos['Email'] === ""){
            error_log("No completó los campos. Complete todos los campos");
            return mostrarError();
        }
        return agregado();
    }
    
    
function mostrarError(){
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("HTTP/1.1 500 Internal server error");
        die("Hubo un problema al procesar la solicitud");
    }
}
  
function validacionNombreYApellido($datos){
    if($datos['Nombre'] == $datos['Apellido']){
        error_log("El nombre y apellido son iguales, debe escribirlos nuevamente");
        return mostrarError();
    }
    return agregado();
}