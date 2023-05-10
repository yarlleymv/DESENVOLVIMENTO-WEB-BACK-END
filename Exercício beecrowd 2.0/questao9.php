<?php

// Função para decodificar o texto
function decodificar($texto) {
    $n = strlen($texto);
    $i = 0;
    $decodificado = "";
    while ($i < $n) {
        if (ctype_alpha($texto[$i])) { // Se for letra, converte
            $decodificado .= chr(ord($texto[$i]) - 3);
        } else {
            $decodificado .= $texto[$i];
        }
        $i++;
    }
    return $decodificado;
}

// Entrada do número de casos de teste
$c = intval(fgets(STDIN));

// Loop para cada caso de teste
for ($i = 0; $i < $c; $i++) {
    $texto = trim(fgets(STDIN)); // Lê o texto codificado
    echo decodificar($texto) . "\n"; // Decodifica e imprime
}
?>
