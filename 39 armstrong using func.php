<?php
function isArmstrong($number) {
    $numStr = (string)$number; // Convert number to string to find length
    $length = strlen($numStr);  // Get the length of the number
    $sum = 0;

    foreach (str_split($numStr) as $digit) {
        $sum += pow((int)$digit, $length);
    }
    return $sum == $number;
}
$number = 153; // Example number, you can change this

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>";
echo "Program by Arpit wadhwa,2220100241" 
?>