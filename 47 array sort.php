<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
echo "Program by Arpit wadhwa,2220100241"
?>

</body>
</html>