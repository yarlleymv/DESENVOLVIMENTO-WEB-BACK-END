<?php

list($m, $n) = explode(' ', readline());
while($m != 0 and $n != 0 and $m > 0 and $n > 0) {
    $soma = 0;
    if($m > $n) {
        for($i = $n; $i <= $m; $i++) {
            echo $i . " ";
            $soma += $i;
        }
        echo "Sum=" . $soma . PHP_EOL;
    } elseif($m < $n) {
        for($i = $m; $i <= $n; $i++) {
            echo $i . " ";
            $soma += $i;
        }
        echo "Sum=" . $soma . PHP_EOL;
    } else {
        echo $m . " Sum=" . $m . PHP_EOL;
    }
   list($m, $n) = explode(' ', readline());
}
?>
