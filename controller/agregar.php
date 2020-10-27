<?php
require_once "../model/producto.php";
require_once "../model/data.php";

$p = new producto();  

$p->cantidad = $_POST["txtcantidad"];

if ($p->cantidad > 0) {
  $p->id = $_POST["txtID"];
  $p->nombre = $_POST["txtnombre"];
  $p->precio = $_POST["txtprecio"];
  $p->stock = $_POST["txtstock"]; 
  $p->subtotal = $p->precio * $p->cantidad;
   

      
  $d = new data(); 

  if ($p->stock >= $p->cantidad) {
    session_start();
    if (isset($_SESSION["carrito"])){
        $carrito = $_SESSION["carrito"];
    }else{
      $carrito = array();
    }
     $sumastocks = 0;
    foreach ($carrito as $pro) {
      if ($pro->id == $p->id) {
        $sumastocks += $pro->cantidad;

      }
    }

     $sumastocks += $p->cantidad;

     if ($p->stock >= $sumastocks) {
       array_push($carrito, $p);
        $_SESSION["carrito"]=$carrito;
       header("location: ../index.php");
     }else {
       header("location: ../index.php?m=1");
     }

  }else {
     header("location: ../index.php?m=1");
  }

}else {
  header("location: ../index.php?m=2");

}









// añadir el producto al carrito

 ?>
