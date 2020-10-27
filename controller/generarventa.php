<?php
require_once "../model/data.php";
session_start();

$carrito = $_SESSION["carrito"];
$total = $_SESSION["total"];


$d = new data();

$d->crearventa($carrito,$total);

session_unset($carrito);


session_unset($total);

header("location: ../index.php");


 ?>
