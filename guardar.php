<?php
/*inicio de la recoleccion de datos*/
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$ciudad=$_POST['ciudad'];
$fecha=$_POST['fecha'];
$imagen=$_POST['imagen'];
$comprobante=$_POST['comprobante'];

/*Mostrando los datos obtenidos*/
echo "Datos obtenidos";
echo "Nombres: $nombres";
echo "<br>";
echo "Apellidos: $apellidos";
echo "<br>";
echo "Ciudad: $ciudad";
echo "<br>";
echo "Fecha: $fecha";
echo "<br>";
echo "Imagen: $imagen";
echo "<br>";
echo "Comprobante: $comprobante";
echo "<br>";
?>