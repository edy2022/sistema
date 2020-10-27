<?php

class Conexion {
   public function __construct($server,$nameBD,$user,$pass){

    error_reporting(0);
     $con= mysql_connect($server,$user,$pass);

     if (!$con) {
         die("Error al conectar:" .mysql_error());
     }
error_reporting(0);
 $selBD = mysql_select_db($nameBD);

 if (!$selBD) {
   die("Error al seleccionar la BD: ". mysql_error());
 }


   }

  
public function ejecutar ($query){
  return mysql_query($query);
}



}




 ?>
