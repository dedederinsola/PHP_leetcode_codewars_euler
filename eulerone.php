<?php
function find_multiples ($thr) {
    $sum = 0;

    for ($i = 1; $i < $thr; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    
    return $sum;
}

echo find_multiples(1000);

<?php
function find_multiples ($thr) {
    $sum = 0;

    for ($i = 1; $i < $thr; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    
    return $sum;
}

echo find_multiples(1000);
