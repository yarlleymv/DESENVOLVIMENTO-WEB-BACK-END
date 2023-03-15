<?php 
$n = intval(readline());
$par = array();
$impar = array();

for ($i = 0; $i < $n; $i++) {
    $valor = intval(readline());
    if ($valor % 2 == 0) {
        array_push($par, $valor);
    } else {
        array_push($impar, $valor);
    }
}
sort($par);
rsort($impar);

foreach ($par as $valor) {
    echo $valor . "\n";
}

foreach ($impar as $valor) {
    echo $valor . "\n";
}

?>