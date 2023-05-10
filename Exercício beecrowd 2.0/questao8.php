<?php

while ($str = fgets(STDIN)) {
  $chars = array_count_values(str_split(trim($str)));
  $oddCount = 0;

  foreach ($chars as $count) {
    if ($count % 2 !== 0) {
      $oddCount++;
    }
  }

  echo $oddCount === 0 ? 0 : $oddCount - 1;
  echo "\n";
}
