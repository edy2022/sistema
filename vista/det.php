<?php
require_once "../model/data.php";  

$id= $_GET['idventa'];

 
$d = new data();

$detalles = $d->getdetalles($idventa); 

echo "<h1>detalles de ventas</h1>";

echo "<table border='1'>";
    echo "<tr>";
           echo "<th>ID</th>";
           echo "<th>producto</th>";
           echo "<th>cantidad</th>";
           echo "<th>subtotal</th>";
           echo "<th>precio</th>";
    echo "</tr>";

foreach ($detalles as $det) {
  echo "<tr>";
        echo "<td>.$det->id.</td>";
        echo "<td>.$det->nombreproducto.</td>";
        echo "<td>.$det->cantidad.</td>";
        echo "<td>.$det->subtotal.</td>";
        echo "<td>.$det->precio.</td>";
  echo "</tr>";
}

echo "</table>";
 ?>
