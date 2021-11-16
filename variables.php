<?php
echo "\n";

# global variables
$global_var = 10;
$x = 4;
$y = 5;
static $x_static = 55;


function testGlobal(){
# local variables
	$local_var = 5;
	global $global_var; // global keyword used to access the global vars inside a method
	echo "global variable inside func: " . $global_var . "\n";
	echo "local Variable inside func: " . $local_var . "\n";

# global can be directaly updated via $GLOBALS aray.
# php stores all the globals in an array which can be directally accessable inside the method.

	global $x,$y;
	echo "before updating the value of global x:" . $x ."\n";
	echo "before updating the value of global y:" . $y ."\n";
# lets update the global x value to 8 and global y to 11.

	$GLOBALS['x'] = 8;
	$GLOBALS['y'] = 11;

}
testGlobal();

echo "after updating globals from method value of x: " . $x . " and value of global y:" . $y . "\n";

echo "Variable global outside func: " . $global_var . "\n";

# static variables

function staticVarTest(){
	global $x_static;
	echo "static variable x: " . $x_static . "\n";
	$x_static++;
}


echo "\nafter calling a function to print static var value!!!\n";
staticVarTest();
staticVarTest();
staticVarTest();
staticVarTest();

?>
