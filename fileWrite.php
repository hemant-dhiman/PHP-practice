<?php
echo "\n";

$filePointer = fopen("newCreatedFile.txt", "a+") or die("Unable to create a file.");
$succesWrite = fwrite($filePointer, "Text added.");
echo "write successfull: " . $success . "\n";
fclose($filePointer);

echo "\n";
?>
