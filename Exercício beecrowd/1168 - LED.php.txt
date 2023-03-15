<?php

$numeros = array(
    0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4, 
    5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
);

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    
    $valor = trim(fgets(STDIN));
    
 
    $num_leds = 0;
    while ($valor > 0) {
        $digito = $valor % 10;
        $num_leds += $numeros[$digito];
        $valor = intdiv($valor, 10);
    }
   printf("%d leds\n", $num_leds);
}

?>