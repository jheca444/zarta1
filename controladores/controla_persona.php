<?php
$nombrepersona = $_POST["nombre"];
$documento = $_POST["docu"];
$fecha_nacimiento = $_POST["fecha"];
$celular = $_POST["telefono"];
echo "<br>El nombre de la persona es: ".$nombrepersona;
echo "<br>El numero de documento es: ".$documento;
echo "<br>La fecha es: ".$fecha_nacimiento;
echo "<br>El celular es: ".$celular;
?>