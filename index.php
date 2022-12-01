<?php //If it is only a php document with no html or other languages, theres no need for a closing php tag

echo 'Hello World'; // Echo prints to the page. // '' makes the content a string // Statement ends with a semi colon
print 'Hello World'; //Print is the same as echo but print has a return value of 1 (typically use echo)

$name = 'Jack'; //variables are declared with  $variableName = 'name'; // Variables cant start with a number but can use underscore
                // $123name wouldnt work, but $_123name would work fine, also no special characters (&^%$)
                // $this cant be used as a variable name as it is already used to reference an object
echo $name; //the value can be called by using the variable name ($name) 

$x = 1; // x is set to 1
$y = $x; // y is set to the value of x that is set previously NOT AFTER so y = 1

$x = 3; // x is now 3

echo $y; // echo value of y which is 1 as it was set before x was changed