<?php
    $valores = readline();
    $valores = explode(" ", $valores);
    $maior = -9999999999;

   for($x = 0; $x < count($valores); $x++){
       if ($maior < $valores[$x]){
           $maior = $valores[$x];
       }
   }
   
    echo "$maior eh o maior\n";
?>