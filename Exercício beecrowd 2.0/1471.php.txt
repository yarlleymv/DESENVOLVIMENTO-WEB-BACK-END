<?php

while (!feof(STDIN)) {
    // Lê a primeira linha do caso de teste
    $input = explode(" ", (readline(" ")));
    $n = intval($input[0]);
    $r = intval($input[1]);
    
    // Lê a segunda linha do caso de teste
    $retornaram = explode(" ", (readline(" ")));
    
    // Cria um array com todos os voluntários
    $voluntarios = range(1, $n);
    
    // Remove os voluntários que retornaram do mergulho
    foreach ($retornaram as $voltaram) {
        $sucesso = array_search($voltaram, $voluntarios);
        if ($sucesso !== false) {
            unset($voluntarios[$sucesso]);
        }
    }
    
    // Verifica se não há voluntários faltantes
    if (empty($voluntarios)) {
        echo "*\n";
    } else {
        echo implode(" ", $voluntarios) . " \n";
    }
}

