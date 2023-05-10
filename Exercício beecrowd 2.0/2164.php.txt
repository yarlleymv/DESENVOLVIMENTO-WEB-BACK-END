<?php
// Lê o valor de entrada
$n = (int) readline();

// Calcula a constante phi e psi
$phi = (1 + sqrt(5)) / 2;
$psi = (1 - sqrt(5)) / 2;

// Calcula o valor de Fibonacci(n) usando a fórmula de Binet
$fibonacci = (pow($phi, $n) - pow($psi, $n)) / sqrt(5);

// Imprime o valor de Fibonacci(n) com 1 casa decimal
printf("%.1f\n", $fibonacci);
?>