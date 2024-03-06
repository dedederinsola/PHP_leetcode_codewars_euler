<?php
function duplicate_encode($word){
  $letters = str_split(strtolower($word));
  
  $counts = array_count_values($letters);
  
  $encoded = '';
    
  foreach ($letters as $letter) {
    // Append "(" if the letter appears once, otherwise append ")"
        $encoded .= ($counts[$letter] === 1) ? '(' : ')';
    }

    return $encoded;
}