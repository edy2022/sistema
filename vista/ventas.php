<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function(){
       $('#mitabla').DataTable({

       });



    });
    </script>
    <title></title>

  </head>
  <body>
    <?php
     require_once "../model/data.php";



     $d = new data();

     $ventas = $d->getventas();

     echo "<h1>listado de ventas</h1>";

     echo "<table border='1' class='display' id='mitabla'  >";
         echo "<tr>";
                echo "<th >ID</th>";
                echo "<th  class='table table-striped'>fecha</th>";
                echo "<th  >total</th>";
                echo "<th  class='table table-striped'>detalle</th>";


                 echo '<a href="../index.php">volver</a>';
         echo "</tr>";


      $total = 0;
     foreach ($ventas as $v) {
       echo "<tr>";
             echo "<td>.$v->id.</td>";
             echo "<td>.$v->fecha.</td>";
             echo "<td>.$v->total.</td>";
             $total += $v->total;


             echo "<td>";
                echo "<a href='/sistema/CrearReporte.php?idventa=".$v->id."'>reporte</a>";
             echo "</td>";
       echo "</tr>";



     }

     echo "<tr>";
     echo "<td colspan='2'>total</td>";
     echo "<td>$$total</td>";
     echo "</tr>";

    echo"</table>";

     ?>


  </body>
</html>
