<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParcialPHP</title>
</head>
<body>
    <form id="datos" action="./formulario.php" method="post">
    Nombre: <input type="text" name="Nombre" id="Nombre"> <br>
    Apellido: <input type="text" name="Apellido" id="Apellido"> <br>
    Telefono: <input type="integer" name="Telefono" id="Telefono"> <br>
    Edad: <input type="integer" name="Edad" id="Edad"> <br>
    Fecha De Nacimiento: <input type="text" name="FechaDeNac" id="FechaDeNac"> <br>
    Email: <input type="text" name="Email" id="Email"> <br>
    <button type="submit">Mostrar </button><br>
</form>
</html>

<?php

function EnviarDatos {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Telefono = $_POST['telefono'];
    $Edad = $_POST['edad'];
    $FechaDeNac = $_POST['FechaDeNac'];
    $Email = $_POST['Email'];
    echo $Nombre  ;
    echo $Apellido  ;
    echo $Telefono  ;
    echo $Edad ;
    echo $FechaDeNac  ;
    echo $Email  ;
  
    }

}
?>

