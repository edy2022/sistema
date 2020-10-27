<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script  type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>   

    <script>   
  $(document).ready(function(){
     $('#mitabla').DataTable({

     });
    
  });

</script>
    <title>Document</title>
</head>
<body>
     <table  class="display" id="mitabla"> 
     <h1> listado de productos</h1>
    
  
    <div class="table-responsive"> 
  
      <table  class="display" id="mitabla">
  
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
            <th>añadir a venta</th>
        </tr>
        </div>
        
        <?php
  
        require_once "model/data.php";
  
  
  
        error_reporting(0);
  
        $d = new Data();
  
  
        $productos = $d ->getProductos();
  
  
        foreach ($productos as $p ) {
          echo "<tr>";
                echo "<td>.$p->id.</td>";
                echo "<td>.$p->nombre.</td>";
                echo "<td>.$p->precio.</td>";
                echo "<td>.$p->stock.</td>";
  
  
                echo "<td>";
                    echo "<form action='controller/agregar.php' method='post'>";
                         echo "<input type='hidden' name='txtID' value='".$p->id."'>";
                         echo "<input type='hidden' name='txtnombre' value='".$p->nombre."'>";
                         echo "<input type='hidden' name='txtprecio' value='".$p->precio."'>";
                         echo "<input type='hidden' name='txtstock' value='".$p->stock."'>";
  
                         echo "<input type='number' name='txtcantidad' required='required'>";
                         echo "<input type='submit' name='btnañadir' value='añadir'  class='btn btn-primary'>";
                         echo "<a href=''><input type='button' name='btneditar' id='' value='editar' class='btn btn-primary' ></a>";
                    echo "</form>";
  
                echo "</td>";
          echo "</tr>";
  
        }
  
  
         ?>
  
  
  
      </table>
  
  <a href="vista/ventas.php">listado de ventas</a>
       <?php
          if (isset($_GET["m"])) {
            $m = $_GET["m"];
            switch ($m) {
              case "1":
              echo "<script>
                         alert('el producto esta agotado');
                         window.location= 'index.php'
             </script>";
                break;
                case "2":
                echo "<script>
                           alert('el producto esta agotado');
                           window.location= 'index.php'
               </script>";
                  break;
  
            }
          }
  
  
  
  
        ?>
  
  
  
  
  
  
      <?php
  
      session_start();
  
  
      if (isset($_SESSION["carrito"])){
          $carrito = $_SESSION["carrito"];
  
  
  
          echo "<h1>listado de compra</h1>";
  
          echo "<table border='1' class='table table-striped' id='table'>";
              echo "<tr>";
                     echo "<th>ID</th>";
                     echo "<th>nombre</th>";
                     echo "<th>precio</th>";
                     echo "<th>stock actual</th>";
                     echo "<th>cantidad</th>";
                     echo "<th>subtotal</th>";
                     echo "<th>eliminar</th>";
              echo "</tr>";
  
              $total = 0;
              $i = 0;
  
              foreach ($carrito as $p ) {
                echo "<tr>";
                      echo "<td>.$p->id.</td>";
                      echo "<td>.$p->nombre.</td>";
                      echo "<td>.$p->precio.</td>";
                      echo "<td>.$p->stock.</td>";
                      echo "<td>.$p->cantidad.</td>";
                      echo "<td>$.$p->subtotal.</td>";
                      echo "<td>";
                         echo "<a href='controller/eliminarprocar.php?in=$i'>eliminar</a>";
                      echo "</td>";
                    $total += $p->subtotal;
                      $i++;
  
  
  
                echo "</tr>";
  
              }
             echo "<tr>";
                   echo "<td colspan='5'>total: </td>";
                   echo "<td colspan='2'>total:$total</td>";
                   $_SESSION["total"] = $total;
              echo "</tr>";
              echo "<tr>";
                    echo "<td colspan='7'>";
                          echo "<form  action='controller/generarventa.php' method='post'>";
                          echo "<input type='submit' name='btn_generar' value='comprar' class='btn btn-primary'>";
  
  
  
  
  
                    echo "</td>";
               echo "</tr>";
  
  
  
          echo "</table>";
  
  
  
  
      }
  
  
       ?>
  
     
     </table>
     


</body>
</html>