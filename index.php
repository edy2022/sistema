<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="librerias/alertifyjs/css/alertifyjs.css">
    <link rel="stylesheet"  type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <script  type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script> 
    <script src="librerias/alertifyjs/alertifyjs.js"></script>    

    
    <script>   
  $(document).ready(function(){
     $('#mitabla').DataTable({

     });
    
  });

</script>
    
<script>
  $(document).ready(function() {
    $("#enviar").click(function () { 
     
     var libras = $("#libra").val();
     var gramos = $("#gramos").val();

     $.post("peso.php", {libra:libras,gramos:gramos}, function(data){
					$("#resultado").html(data);
        });

      
    });

  });

</script>
 
<script>
 $(document).ready(function () {
     $("#guardardatos").click(function() { 
        var id=$("#id").val();
        var nombre=$("#nombre").val();
        var precio=$("#precio").val();
        var stock=$("#stock").val(); 
        var cantidad=$("#cantidad").val(); 

        
        $.post("controller/agregar.php", {id:id,nombre:nombre,precio:precio,stock:stock,cantidad:cantidad}, function(data){
					$("#resultado1").html(data);
        });

     });
 });

</script>






    
  </head>


  <body> 

   
      
     
  


    <h1> listado de productos</h1>  
          
         <div>
         <a href="cotizar.php"><button class="btn btn-primary">COTIZACION</button></a> 
         <a href="reporte.php"><button class="btn btn-primary">INFORME VENTA</button></a> 
         <a href="pdf1.php"><button class="btn btn-primary">DETALLE VENTA</button></a> 
         </div> 
  
   <div>
    
   <br>
    <label> precio libra</label> <input type="text" name="libra" id="libra" required> </br>  
   <br> 
    <label>gramos</label> <input type="text" name="gramos" id="gramos" required> </br> 
 
 
    
    <input type="submit" name="calcular" value="calcular"  id="enviar"> 
     
    <div id="resultado"></div>


    
    </div>
   
   
   
 </body> 
 

 

    <table border="1" class="table table-striped" id="mitabla"></br> 

          
        <thead>
          <th>ID</th> 
          <th>nombre</th> 
          <th>precio</th>
          <th>stock</th>
          <th>añadir a venta</th>  
          


          </thead>
      

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
                  echo "<form action='controller/agregar.php' method='post' id='formulario'>";
                       echo "<input type='hidden' name='txtID'       id='id' value='".$p->id."'>";
                       echo "<input type='hidden' name='txtnombre'   id='nombre'   value='".$p->nombre."'>";
                       echo "<input type='hidden' name='txtprecio'   id='precio'  value='".$p->precio."'>";
                       echo "<input type='hidden' name='txtstock'    id='stock'  value='".$p->stock."'>";
                       echo "<input type='number' name='txtcantidad' id='cantidad'  required='required'  step='0.1'>";
                       echo "<input type='submit' name='btnañadir' value='añadir' id='guardardatos'  class='btn btn-primary'>"; 
                       echo "<a href=''><input type='button' name='btneditar' id='' value='editar' ></a>";
                  echo "</form>";
                                      
                  echo"<div id='resultado1'></div>";
                  
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
    

    echo"<div id='resultado1'>"; echo"</div>";



    if (isset($_SESSION["carrito"])){
        $carrito = $_SESSION["carrito"];


 
        echo "<h1>listado de compra</h1>";


        
      echo"<div>";

        echo "<table border='1' class='table table-striped'>";
            echo "<tr>";  
                   echo "<th>ID</th>";
                   echo "<th>nombre</th>";
                   echo "<th>precio</th>";
                   echo "<th>stock actual</th>";
                   echo "<th>cantidad</th>";
                   echo "<th>subtotal</th>";
                   echo "<th>eliminar</th>";
            echo "</tr>";
           
            echo"<div id='resultado1'>"; echo"</div>";

            echo"<div>"; 
            
           

     
            echo"</div>";
 


      echo"</div>";


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
                        echo "<input type='submit' name='btn_generar' value='comprar'>"; 
                        

                        echo"<a href='#' id='print'>Download PDF</a>";
                        

                  echo "</td>";
             echo "</tr>";



        echo "</table>";




    }
        
   


     ?>




 

  

  </body>
</html>











