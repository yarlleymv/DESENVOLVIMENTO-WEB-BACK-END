<?php

while (true) {
  // Lê o valor de N
  $n = intval(trim(fgets(STDIN)));

  if ($n == 0) {
    // Fim da entrada
    break;
  }

  // Lê as células do tabuleiro
  $cells = array_map('intval', explode(' ', trim(fgets(STDIN))));

  // Itera sobre as células do tabuleiro
  for ($i = 0; $i < $n; $i++) {
    $count = 0;
    // Verifica as células vizinhas
    if ($i > 0 && $cells[$i-1] == 1) { // esquerda
      $count++;
    }
    if ($cells[$i] == 1) { // atual
      $count++;
    }
    if ($i < $n-1 && $cells[$i+1] == 1) { // direita
      $count++;
    }
    // Imprime o resultado
    echo $count . PHP_EOL;
  }
}

?>
