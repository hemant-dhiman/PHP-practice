<?php
echo "\n";

# indexed arrays
$cars = array("Volvo","BMW","Toyota");

echo "indexed array.\n";
echo "i have ". $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "\n";

echo "loop through indexed array.\n";
for ($i=0; $i<count($cars); $i++){
	echo $i . ". " . $cars[$i] . "\n";
}


# associative arrays
echo "Associative arrays:\n";
# 1 way of declaring associative array.
$age = array("vinit"=>"33", "vikram"=>"30", "Hemant"=>"23");
# 2nd way of declaring associative array.
$buddy['mohit'] = "29";
$buddy['abhishek'] = "21";
$buddy['kushvaha'] = "28";

echo "accessing vikrams age by key: " . $age['vikram'] . "\n";
echo "accessing vinits age by key: " . $age['vinit'] . "\n\n";

echo "accessing buddys array with loop:\n";
foreach($buddy as $name => $age){
	echo "{key: " . $name . ", value: ". $age . "}\n";
}


# multidimensional arrays
echo "multidimensional array:\n";
$multiDArray = array(
		array("Volvo", 22, 18),
		array("BMW", 15, 13),
		array("Saab", 1, 3),
		array("Mahindra", 17, 16)
		);

echo "Car: " . $multiDArray[0][0] . ", In stock: " . $multiDArray[0][1] . ", Sold: " . $multiDArray[0][2] . "\n\n";

echo "for loop in 2d array:\n";

for ($i = 0; $i<count($multiDArray); $i++) {
echo "Row:". $i . "\n";
for($j=0; $j<count($multiDArray[$i]); $j++){
echo "- ". $multiDArray[$i][$j] . "\n";
}
}

# array methods

echo "\n";
?>
