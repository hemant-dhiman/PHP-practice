<?php
echo "\n";

function addNumber(int $a, int $b){
	return $a + $b;
}

echo addNumber(4,"5 is not a num.");

echo "\ndefault argument or optional argument functions.\n";

function showNumber(int$a = 150){
	return "\nsingle argument value is: " . $a . "\n\n"; // this func returning a value.
}

echo showNumber(10); 
echo showNumber(20);
echo showNumber(30); # this method call and above 2 call will use optional value we provide at the time of method call with value
echo showNumber(); // this call will used default argument value

# php functions returning a value with return type.
function methodWithReturnType(float $a, float $b) : float{
	return $a + $b;
}

echo "return type float (1.2 + 3.4): " . methodWithReturnType(1.2, 3.4);
echo "\n";

function method2WithReturnType(float $a, float $b) : int{
	return $a + $b;
}

echo "return type int (1.2 + 3.4): " . method2WithReturnType(1.2, 3.4);
echo "\n";


# function arg pass-by-reference
$num = 2;

function addFive(&$a){
	$a += 5;
}

function addTen($b){
	$b += 10;
}

addTen($num);
echo "num value after pass by value: " . $num . "\n";

addFive($num);
echo "num value after pass by ref: " . $num . "\n";



echo "\n";
?>
