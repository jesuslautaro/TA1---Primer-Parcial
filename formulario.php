<?php

   $conexion=mysqli_connect("127.0.0.1", "root", "", "parcial");

   $_SERVER["REQUEST_METHOD"] == "POST" ;
   $Nombre = $_POST['Nombre'];
   $Apellido = $_POST['Apellido'];
   $Telefono = $_POST['Telefono'];
   $Fecha = $_POST['FechaDeNac'];
   $Edad = $_POST['Edad'];
   $Email = $_POST['Email'];
   
   $sql = "INSERT INTO persona (Nombre,Apellido,Telefono,FechaDeNac,Edad,Email) VALUES (
       '$Nombre', '$Apellido', '$Telefono', '$FechaDeNac', '$Edad', '$Email')";

   mysqli_query($conexion,$sql);