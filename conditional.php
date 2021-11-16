<?php
echo "\n";

# if statement
$x = 1; # can have 2
$y = 2; # can have 1

if($x > $y){
	echo "x is greater!\n";
} elseif ($y > $x){
	echo "y is greater\n";
} elseif($x == $y){
	echo "Both are equal.\n";
}else {
	echo "x & y is NaN\n";
}

# switch statement
$color = "red"; # can have 'red', 'blue', 'blue' and any string value

switch($color){
	case "red":
		echo "color red.\n";
			break;

	case "green":
		echo "color green.\n";
			break;

	case "blue":
		echo "color blue.\n";
			break;

	default:
		echo "Not have a color.\n";
}




echo "\n";
?>
