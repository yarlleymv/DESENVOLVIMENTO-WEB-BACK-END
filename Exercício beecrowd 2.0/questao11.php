<?php

function fib($n, &$num_calls) {
    $num_calls++;
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fib($n-1, $num_calls) + fib($n-2, $num_calls);
    }
}

// leitura do número de casos de teste
$cases = intval(fgets(STDIN));

// para cada caso de teste
for ($i = 0; $i < $cases; $i++) {
    // leitura do valor de X
    $x = intval(fgets(STDIN));
    
    // chamada recursiva da função fib, passando como referência a variável $num_calls
    $num_calls = 0;
    $result = fib($x, $num_calls);
    
    // impressão do resultado
    echo "fib($x) = $num_calls calls = $result\n";
}

?>
