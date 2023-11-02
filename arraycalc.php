<?php 
$numbers = array(2, 4, 6, 8, 10);

$firstElement = reset($numbers);
echo "i. First element: $firstElement<br>";

$lastElement = end($numbers);
echo "ii. Last element: $lastElement<br>";

$numbers[] = 12;
echo "iii. Updated array after adding 12: ";
print_r($numbers);
echo "<br>";

$sum = array_sum($numbers);
echo "iv. Sum of all elements: $sum<br>";

?>
