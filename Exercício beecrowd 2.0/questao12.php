<?php

while (true) {
    // Lê o número de camisetas para a turma
    $n = (int) fgets(STDIN);

    // Se n for 0, encerra o programa
    if ($n == 0) {
        break;
    }

    // Arrays para armazenar as camisetas de cada cor e tamanho
    $branco_p = [];
    $branco_m = [];
    $branco_g = [];
    $vermelho_p = [];
    $vermelho_m = [];
    $vermelho_g = [];

    // Lê as informações de cada camiseta e as armazena no array correspondente
    for ($i = 0; $i < $n; $i++) {
        $nome = trim(fgets(STDIN));
        list($cor, $tamanho) = explode(" ", trim(fgets(STDIN)));

        if ($cor == "branco") {
            if ($tamanho == "P") {
                $branco_p[] = $nome;
            } elseif ($tamanho == "M") {
                $branco_m[] = $nome;
            } else {
                $branco_g[] = $nome;
            }
        } else {
            if ($tamanho == "P") {
                $vermelho_p[] = $nome;
            } elseif ($tamanho == "M") {
                $vermelho_m[] = $nome;
            } else {
                $vermelho_g[] = $nome;
            }
        }
    }

    // Ordena os arrays de cada cor e tamanho
    sort($branco_p);
    sort($branco_m);
    sort($branco_g);
    sort($vermelho_p);
    sort($vermelho_m);
    sort($vermelho_g);

    // Imprime as camisetas de cada cor e tamanho, em ordem ascendente de cor, descendente de tamanho e ascendente de nome
    echo "branco P:", implode(",", $branco_p), "\n";
    echo "branco M:", implode(",", $branco_m), "\n";
    echo "branco G:", implode(",", $branco_g), "\n";
    echo "vermelho P:", implode(",", $vermelho_p), "\n";
    echo "vermelho M:", implode(",", $vermelho_m), "\n";
    echo "vermelho G:", implode(",", $vermelho_g), "\n\n";
}
