<?php
$mysqli = new mysqli("localhost","root","","ventas");

error_reporting(0);

 $tabla_1  = "producto";

if ($mysqli->connect_error) {
  die('error en la conexion' . $mysqli->connect_error);
}

 ?>
 