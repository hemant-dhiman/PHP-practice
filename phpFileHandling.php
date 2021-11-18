<?php
echo "\n";

# read file method.
echo "read through readfile() method!\n";
echo readfile("readFile.txt") . "\n";
echo readfile("noFileExist.txt") . "\n";

# fopen(), fread(), fclose(), filesize() file menipulation methods.
echo "read through fopen() method!\n";
$myFile =  fopen("readFile.txt", "r") or die("unable to open file: 'readFile.txt'");

echo fread($myFile, filesize("readFile.txt")) . "\n";
fclose($myFile);

# read a single line fgets() method.
echo "read a single line from a file by fgets() method. \n";
$myFile =  fopen("readFile.txt", "r") or die("unable to open file: 'readFile.txt'");

echo fgets($myFile) . "\n";
fclose($myFile);

# read a file line by line 
echo "read a file line by line using while loop and fgets() method. \n";
$myF =  fopen("readFile.txt", "r") or die("unable to open file: 'readFile.txt'");
while(!feof($myF)){
echo fgets($myF) . "\n new line: ";
}
echo "\n";
fclose($myF);

# read a file character by character using method fgetc().
echo "read a file character by character using while loop and fgetc() method. \n";
$myF =  fopen("readFile.txt", "r") or die("unable to open file: 'readFile.txt'");
while(!feof($myF)){
echo fgetc($myF) . "--";
}
fclose($myF);


echo "\n";
?>
