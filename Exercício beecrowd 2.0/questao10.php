<?php

// leitura do número de casos de teste
$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    // leitura dos placares
    $placar1 = explode(' x ', trim(fgets(STDIN)));
    $placar2 = explode(' x ', trim(fgets(STDIN)));
    
    // cálculo da pontuação acumulada de cada time
    $pontos1 = ($placar1[0] > $placar1[1]) ? 3 : (($placar1[0] == $placar1[1]) ? 1 : 0);
    $pontos2 = ($placar1[1] > $placar1[0]) ? 3 : (($placar1[0] == $placar1[1]) ? 1 : 0);
    $pontos1 += ($placar2[1] > $placar2[0]) ? 3 : (($placar2[0] == $placar2[1]) ? 1 : 0);
    $pontos2 += ($placar2[0] > $placar2[1]) ? 3 : (($placar2[0] == $placar2[1]) ? 1 : 0);
    
    // cálculo do saldo de gols acumulado de cada time
    $saldo1 = $placar1[0] - $placar1[1] + $placar2[0] - $placar2[1];
    $saldo2 = $placar1[1] - $placar1[0] + $placar2[1] - $placar2[0];
    
    // cálculo do número de gols marcados fora de casa acumulado de cada time
    $golsFora1 = $placar1[1] + $placar2[0];
    $golsFora2 = $placar1[0] + $placar2[1];
    
    // verificação do vencedor
    if ($pontos1 > $pontos2 || ($pontos1 == $pontos2 && $saldo1 > $saldo2) || ($pontos1 == $pontos2 && $saldo1 == $saldo2 && $golsFora1 > $golsFora2)) {
        echo "Time 1\n";
    } elseif ($pontos2 > $pontos1 || ($pontos1 == $pontos2 && $saldo2 > $saldo1) || ($pontos1 == $pontos2 && $saldo1 == $saldo2 && $golsFora2 > $golsFora1)) {
        echo "Time 2\n";
    } else {
        echo "Penaltis\n";
    }
}

?>
