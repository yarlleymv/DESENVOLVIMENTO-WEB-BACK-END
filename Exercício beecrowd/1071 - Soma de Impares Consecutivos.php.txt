<?php
$a = 15;
$b = 12;
$soma = 0;

if($a > $b){
  for($i = $b; $i < $a; $i++){
    if($i%2 == 1){
      $soma = $i+ $soma;
       
    }
  }  
}
elseif($b > $a){
  for($i = $a; $i < $b; $i++){
    if($i%2 == 1){
      $soma = $soma + $i;
        
    }
  } 
}  
elseif($a == $b){
  echo 0;
}
  echo $soma;

?>