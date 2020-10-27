<?php
require_once "../../clases/Conexion.php"; 
require_once "../../model/data.php"; 





$c=new conectar();
$conexion= $c->conexion(); 

$idventa=$_GET['idventa'];  


$d = new data();

$detalles = $d->getdetalles($idventa); 

$sql= " select v.id,v.fecha
from detalle d,venta v
where d.venta = v.id and
d.venta ='$idventa' "; 


/* 
select d.id,d.cantidad, d.subtotal,v.fecha
from detalle d,venta v
where d.venta = v.id and
d.venta

*/


$result=mysqli_query($conexion,$sql);

$ver=mysqli_fetch_row($result);


  $fecha=$ver[1];
  $factura=$ver[0];
  


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <title>Document</title> 
    <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    
    
    
    </style>
</head>
<body>  


     <center><h1>Desechables donde mary</h1></center>  
  <table>  
<tr>  
<td> Factura Venta no. <?php  echo $factura; ?></td>
<td>fecha: <?php echo $fecha; ?></td>
</tr> 
</table> 
    
     <table border="1"> 



     <tr>
            <th>ID</th>
            <th>producto</th>
            <th>cantidad</th>
           <th>subtotal</th>
            <th>precio</th>
    </tr>
      <?php 


/*         

    select d.id,d.cantidad, d.subtotal, v.fecha
          from detalle d,venta v
          where d.producto = p.id and
          d.venta ='$idventa'
         
*/
$query = "select d.id,p.nombre,d.cantidad, d.subtotal, p.precio
from detalle d, producto p
where d.producto = p.id and
d.venta = '$idventa'";


          
      
            $result=mysqli_query($conexion,$query) 
            //http://127.0.0.1/sistema/vista/reportesventas/reporteVentaPdf.php?idventa=24
      ?>
             
          <?php  while($row=$result->fetch_assoc())
          { ?> 
         
        <tr> 
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td> 
            <td><?php echo $row['cantidad']; ?></td> 
            <td><?php echo $row['subtotal']; ?></td> 
            <td><?php echo $row['precio']; ?></td>
        </tr> 
        
        <?php  
         $total = $total + $row['subtotal'];
        } ?> 
          <tr>
            <td>total:<?php echo "$". $total; ?></td>
          </tr>
     </table> 
      

</body>
</html>