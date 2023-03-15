<?php

while (true) {
  
  $input = trim(fgets(STDIN));
  list($h1, $m1, $h2, $m2) = sscanf($input, "%d %d %d %d");

 
  if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
    break;
  }

  
  $time1 = $h1 * 60 + $m1; 
  $time2 = $h2 * 60 + $m2;
  $sleepTime = ($time2 - $time1 + 1440) % 1440;

  echo $sleepTime . "\n";
}

?>