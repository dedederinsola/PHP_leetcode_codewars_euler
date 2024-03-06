<?php
function printerError($s) {
  $allowed = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];
  $control = str_split($s);
  $denom = count($control);
  $num = 0;
  foreach($control as $l){
    if (!in_array($l, $allowed)){
      $num += 1;
    }
  }
  return $num.'/'.$denom;
  
}