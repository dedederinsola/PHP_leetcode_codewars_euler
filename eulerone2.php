<?php
   
    function find_multiples($thr) {
        $sum = 0;
    
        // Sum of multiples of 3
        $sum += sum_of_multiples($thr, 3);
    
        // Sum of multiples of 5
        $sum += sum_of_multiples($thr, 5);
    
        // Remove duplicates (multiples of both 3 and 5)
        $sum -= sum_of_multiples($thr, 15);
    
        return $sum;
    }
    
    function sum_of_multiples($thr, $multiple) {
        $n = floor(($thr - 1) / $multiple);
        return $multiple * $n * ($n + 1) / 2;
    }
    
    echo find_multiples(1000);

    
<?php
   
    function find_multiples($thr) {
        $sum = 0;
    
        // Sum of multiples of 3
        $sum += sum_of_multiples($thr, 3);
    
        // Sum of multiples of 5
        $sum += sum_of_multiples($thr, 5);
    
        // Remove duplicates (multiples of both 3 and 5)
        $sum -= sum_of_multiples($thr, 15);
    
        return $sum;
    }
    
    function sum_of_multiples($thr, $multiple) {
        $n = floor(($thr - 1) / $multiple);
        return $multiple * $n * ($n + 1) / 2;
    }
    
    echo find_multiples(1000);

    