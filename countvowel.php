<?php
function vcount($inputString) {
    $lowercaseString = strtolower($inputString);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    $vwlcount = 0;

    for ($i = 0; $i < strlen($lowercaseString); $i++) {
        $char = $lowercaseString[$i];

        if (in_array($char, $vowels)) {
            $vwlcount++;
        }
    }
    
    return $vwlcount;
}

$inputString = "Hello, BDU! Today is 5 November, 2023.";
$vwlcount = vcount($inputString);
echo "Number of vowels: $vwlcount"; 
?>
