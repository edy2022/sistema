function agregardatos(id,nombre,precio,stock) {
   
    cadena="id=" + id + 
     "&nombre=" + nombre+ 
     "&precio=" + precio +
     "&stock=" + stock; 
     ""
    
    $.ajax({
        type: "POST",
        url: "controller/agregar.php",
        data:"data",
        success: function (r) {
            if (r==1) {
                alertify.success("agregado con exito");
            }else{
                alertify.console.error("fallo el servidor");
                
            }
        }
    });

} 



