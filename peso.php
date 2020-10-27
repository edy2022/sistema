<?php    
           $libra = $_POST['libra'];
           $gramos = $_POST['gramos'];
          
          
           $gramo =  0.002;
        
           $total = $gramos *  $gramo ;
           $precio = $gramos *  $gramo * $libra;
 
           echo "la libra es : ".$total ."</br> ". "el precio es :".$precio 
 
             
           
    ?>