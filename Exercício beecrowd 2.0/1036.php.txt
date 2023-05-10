<?php

$a  = floatval(readline());
$b  = floatval(readline());
$c  = floatval(readline());

$delta = $b * $b - 4 * $a * $c;

if ($delta < 0)  {
  echo "Impossível calcular";
}
else if ($delta == 0){
  $x = (-$b) / (2*$a);
  printf ("R1 = R2 = %.5f \n", $x);
}
else {
  $x1 = (-$b + sqrt($delta)) / (2*$a);
  $x2 = (-$b - sqrt($delta)) / (2*$a);
     printf ("R1 = %.5f \n", $x1);
     printf ("R2 = %.5f \n", $x2);
}