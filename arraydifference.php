<?php
function arrayDiff($a, $b) {
  if ($a == $b) {
    return 0;
  }
  return ($a>$b)?1:-1;
}

function compute ($a, $b){
  $sol = array_udiff($a, $b,'arrayDiff');
  foreach ($sol as $value) {
    echo $value . PHP_EOL; // PHP_EOL is for a new line
  }
}

$a = [1,2];
$b = [1];

print_r(compute ($a, $b));

