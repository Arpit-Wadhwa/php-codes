<?php

function countDigits($number) { 
    if ($number == 0) {
        return 1;
    }
    $count = 0;
    $number = abs($number);

    while ($number > 0) {
        $number = (int)($number / 10);
        $count++;
    }
    return $count;
}
$number = 12345;
echo "The number of digits in $number is: " . countDigits($number);
echo "<br>";
echo "Program by Arpit wadhwa,2220100241"
?>
