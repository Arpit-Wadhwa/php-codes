<?php
function factorial($num) {
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}


$number = 6;  
echo "Factorial of $number is " . factorial($number);
echo "<br>";
echo "Program by Arpit wadhwa,2220100241"   
?>
