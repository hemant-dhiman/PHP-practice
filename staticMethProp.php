<?php
echo "\n";

class A{
public static $value = "hiii";
public static function abc(){
echo "static method.\n";
}
}

echo "Value: " . A::$value . "\n";
echo "method: " . A::abc() . "\n";

echo "\n";
?>
