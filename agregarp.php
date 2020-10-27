<?php    
          $libra = $_POST['libra'];
          $gramos = $_POST['gramos'];
          $total = $_POST['total']; 
          $precio = $_POST['precio'];
         
         
          $gramo =  0.002;
       
          $total = $gramos *  $gramo ;
          $precio = $gramos *  $gramo * $libra;

          echo "la libra es : ".$total ."</br> ". "el precio es :".$precio 

          
          
   ?>