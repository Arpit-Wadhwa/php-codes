WAP to print factorial of any number
<br>
<?php

$number = 5;
$result = 1;

for ($i = 1; $i <= $number; $i++) {
    $result *= $i;
}

echo "The factorial of $number is: " . $result ."<br>";
echo "This Program is written by Arpit,2220100241"
?>
