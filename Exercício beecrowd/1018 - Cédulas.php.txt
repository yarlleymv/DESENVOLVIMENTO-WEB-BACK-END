<?php
$note_list = array(100, 50, 20, 10, 5, 2, 1);

$notas = readline();

echo $notas . "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  $notas / $note_list[$i];
    
    echo (int) $count . " nota(s) de R$ " . $note_list[$i] . ",00\n";
    
    $notas %= $note_list[$i];
}

?>