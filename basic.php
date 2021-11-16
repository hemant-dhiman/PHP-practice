<?php
echo "\n";

$text = "PHP";
$int_1 = 1;
$int_2 = 2;
$int_3 = 3;

$string_1 = "P";
$string_2 = "H";
$string_3 = "P Language!";

echo "I love $text";

echo "\nI love $texT"; // single line comment.
# also a single line comment.

/*
   block line comment.
 */

echo "\nThis is a string.", " also a string ", "ans another example is this.\n";
echo "\n------Integers addition in echo-----\n";
echo  "1+2+3: ";
echo  $int_1 + $int_2 + $int_3;

echo "\n----String concat----\n";
echo $string_1 . $string_2 . $string_3 . "\n";

echo "-------print method--------\n";
$print = print "print method always returns: ";
echo $print . "\n";

echo "----predefined integer constant----\n";
echo "largest int: " . PHP_INT_MAX . "\n";
echo "smallest int: " . PHP_INT_MIN . "\n";
echo "size of int in bytes: " . PHP_INT_SIZE . "\n";

$int_check = 10;
echo "check weather is int: " . is_int($int_check) . "\n";
$int_check = "10";
echo "check weather is int: " . is_int($int_check) . "\n";

echo "\n";
?>
