<?php
echo "\n";

trait msg {
	public function msg1(){
		echo "inside msg1 method.\n";
	}
}

trait msgs{
public function msgsMethod(){
echo "inside msgsMethod.\n";
}
}

class Test {
	use msg, msgs;
}

$obj = new Test();
$obj->msg1();
$obj->msgsMethod();

echo "\n";
?>
