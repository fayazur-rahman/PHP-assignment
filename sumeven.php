<?php 
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$result = sumeven($numbers);
echo "Sum of even numbers: $result"; 

function sumeven($array) {
    $sum = 0;
    
    foreach ($array as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }
    
    return $sum;
}

?>