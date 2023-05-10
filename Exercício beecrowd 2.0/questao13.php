<?php

while (true) {
  // Lê os valores de Q, D e P
  $input = readline();
  if ($input == 0) {
    break;
  }
  list($Q, $D, $P) = explode(" ", $input);

  // Calcula a quantidade de páginas do livro
  $pages = (($D * $Q) / (($P - $Q) * 1.0)) * $P;
  echo intval($pages) . " pagina";
  if (intval($pages) != 1) {
    echo "s";
  }
  echo "\n";
}
