<?php
echo "\n";

echo "while loop.\n";
# while loop
$x = 5;
while($x-- >= 1){
	echo "x is: " . $x . "\n";
}


echo "do while loop.\n";
# do while loop
$x = 5;
do{
	echo "y is: " . $x . "\n";
}while($x-- >= 1);


echo "for loop.\n";
# for loop
for($x=5; $x>=1; $x--){
	echo "z is: " . $x . "\n";
}

echo "foreach loop.\n";
# foreach loop
$x = array("red","green","blue","yellow");
foreach ($x as $val){
	echo "color from array: " . $val . "\n";
}


echo "break after 3 occure!!\n";
#break statement
for($i=0; $i<=5; $i++){
	echo "i is: " . $i . "\n";
	if($i == 3){
		break;
	}
}


echo "continue statement if 4 occure!\n";
for($i=0; $i<=7; $i++){
	if ($i == 4){
		continue;
	}
	echo "i is: " . $i . "\n";
}


echo "\n";
?>
